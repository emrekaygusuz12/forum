<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),

            'user_id'=> \App\Models\User::inRandomOrder()->first()->id,
            'category_id'=> \App\Models\Category::inRandomOrder()->first()->id,
            'post_id'=> \App\Models\Post::inRandomOrder()->first()->id,
        ];
    }
}
