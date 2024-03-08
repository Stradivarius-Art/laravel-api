<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Enum\UserRole;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(3)
            ->has(
                Post::factory(5)
                    ->for(
                        User::factory()
                            ->create(['role' => UserRole::Moderator])
                    )
                    ->has(
                        Comment::factory(5)
                            ->for(
                                User::factory()
                                    ->create(['role' => UserRole::User])
                            )
                    )
            )
            ->create();
    }
}
