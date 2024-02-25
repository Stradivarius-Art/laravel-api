<?php

namespace Database\Factories;

use App\Enum\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->text(),
            'count' => fake()->randomNumber(2),
            'price' => fake()->randomNumber(3),
            'status' => fake()->randomElement([ProductStatus::Published, ProductStatus::Draft, ProductStatus::Test])
        ];
    }
}