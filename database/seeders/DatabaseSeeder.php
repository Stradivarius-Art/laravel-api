<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Enum\UserRole;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\ProductsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->createOne([
            'email' => 'artemlepeshenko23@gmail.com',
            'role' => UserRole::Admin,
        ]);

        $this->call([
            ProductsSeeder::class,
            PostSeeder::class
        ]);
    }
}
