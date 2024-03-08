<?php

namespace App\Services\Posts;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    public function index(): Collection
    {
        $post = Post::query()
            ->select(['title', 'views', 'thumbnail', 'created_at'])
            ->get();
        return $post;
    }
}
