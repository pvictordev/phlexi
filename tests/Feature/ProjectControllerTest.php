<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Project;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Cache;


class ProjectControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // TODO: create factories for the models (project, category)

    // delete the projects after inserting them, the test will show success only once, because only once there can be 3 tests
    public function test_index_shows_all_active_projects()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $category = Category::factory()->create();
        $projects = Project::factory()->count(3)->create(['status' => 1, 'category_id' => $category->id]);

        $response = $this->get(route('market.all'));

        $response->assertStatus(200);
        $response->assertViewHas('projects', $projects);
        $response->assertViewHas('categories');
    }

    public function test_category_shows_projects_of_specific_category()
    {
        $category = Category::factory()->create();
        $projects = Project::factory()->count(2)->create(['status' => 1, 'category_id' => $category->id]);

        Cache::shouldReceive('remember')
            ->once()
            ->andReturn($projects);

        $response = $this->get(route('market.category', $category->id));

        $response->assertStatus(200);
        $response->assertViewHas('projects', $projects);
        $response->assertViewHas('categories');
    }

    // tweak tests
    public function test_store_creates_project()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'category_id' => $category->id,
            'title' => 'New Project',
            'description' => 'Project Description',
            'price' => 100,
        ];

        Cache::shouldReceive('forget')->with('projects')->once();
        Cache::shouldReceive('forget')->with("projects_category_{$category->id}")->once();

        $response = $this->post(route('project.store'), $data);

        $response->assertRedirect('/dashboard/client');
        $response->assertSessionHas('success', 'Project successfully created.');
        $this->assertDatabaseHas('projects', $data);
    }
    public function it_update_updates_project()
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();
        $project = Project::factory()->create(['category_id' => $category1->id, 'status' => 1]);
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
            'category_id' => $category2->id,
            'title' => 'Updated Project',
            'description' => 'Updated Description',
            'price' => 200,
            'status' => 1,
        ];

        Cache::shouldReceive('forget')->with('projects')->once();
        Cache::shouldReceive('forget')->with("projects_category_{$category1->id}")->once();
        Cache::shouldReceive('forget')->with("projects_category_{$category2->id}")->once();

        $response = $this->put(route('project.edit', $project->id), $data);

        $response->assertRedirect('/dashboard/client');
        $response->assertSessionHas('success', 'Project successfully updated.');
        $this->assertDatabaseHas('projects', $data);
    }
    public function it_destroy_deletes_project()
    {
        $category = Category::factory()->create();
        $project = Project::factory()->create(['category_id' => $category->id, 'status' => 1]);
        $user = User::factory()->create();
        $this->actingAs($user);

        Cache::shouldReceive('forget')->with('projects')->once();
        Cache::shouldReceive('forget')->with("projects_category_{$category->id}")->once();

        $response = $this->delete(route('project.destroy', $project->id));

        $response->assertRedirect('/dashboard/client');
        $response->assertSessionHas('success', 'Project successfully deleted.');
        // $this->assertDeleted($project);
    }
}
