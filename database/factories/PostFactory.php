<?php

namespace Database\Factories;

use App\Enum\PostStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'body' => fake()->randomHtml(),
            'thumbnail' => fake()->imageUrl(),
            'status' => fake()->randomElement([
                PostStatus::Draft,
                PostStatus::Private,
                PostStatus::Published,
            ]),
            'views' => fake()->numberBetween(0, 1000),
        ];
    }
}
