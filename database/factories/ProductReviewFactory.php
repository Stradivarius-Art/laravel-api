<?php

namespace Database\Factories;

use App\Enum\ReviewStars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReview>
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => fake()->text(100),
            'rating' => fake()->numberBetween(1, 5),
            'stars' => fake()->randomElement([ReviewStars::OneStar, ReviewStars::TwoStar, ReviewStars::ThreeStar, ReviewStars::FourStar, ReviewStars::FiveStar]),
        ];
    }
}
