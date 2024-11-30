<?php

namespace Database\Factories;


use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'client_id' => User::factory(),
            'price' => $this->faker->randomFloat(2, 50, 5000),
            'status' => $this->faker->randomElement([0, 1]),
            'title' => $this->faker->sentence,
            'description' => $this->faker->text(255),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
