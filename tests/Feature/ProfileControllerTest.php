<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    public function test_updates_user_profile_information()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $file = UploadedFile::fake()->image('profile_picture.jpg');

        $response = $this->patch(route('profile.update'), [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'picture' => $file,
        ]);

        $response->assertRedirect(route('dashboard'));
        $response->assertSessionHas('success', 'Profile successfully updated.');

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
        ]);

        $filePath = 'public/images/' . $file->hashName();
        $this->assertTrue(Storage::disk('s3')->exists($filePath));

        // (ensure that if a new image is uploaded, the old one is removed from S3)
        // $this->assertTrue(true); // Add any necessary logic to test old file deletion
    }
    public function test_fails_to_update_with_invalid_data()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->patch(route('profile.update'), [
            'email' => 'not-an-email',
        ]);

        $response->assertSessionHasErrors(['email']);
    }
    public function test_deletes_the_user_account()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->delete(route('profile.destroy'), [
            'password' => 'password',
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHas('success', 'Profile successfully deleted.');

        $this->assertDatabaseMissing('users', ['id' => $user->id]);
        $this->assertGuest();
    }
}
