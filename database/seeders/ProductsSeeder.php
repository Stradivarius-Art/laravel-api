<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{

    public function run(): void
    {
        User::factory(7)
            ->has(
                Product::factory(7)
                    ->has(ProductImage::factory(rand(1, 4)), 'images')
                    ->has(
                        ProductReview::factory(rand(0, 8))->for(User::factory()),
                        'reviews'
                    )
            )
            ->create([
                'is_admin' => true
            ]);
    }
}
