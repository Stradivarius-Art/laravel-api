<?php

namespace App\Facades;

use App\DTO\PostDTO;
use App\Models\Post as ModelPost;
use App\DTO\UpdatePostDTO;
use Illuminate\Support\Facades\Facade;

class Post extends Facade
{
    /**
     * @method static \App\Models\Post index()
     * @method static PostDTO store(PostDTO $dto)
     * @method static \Illuminate\Database\Eloquent\Model comment(\App\Models\Post $post, string $text)
     * @method static \Illuminate\Http\JsonResponse update(UpdatePostDTO $dto, ModelPost $post)
     * @see \App\Services\Posts\PostService
     */

    protected static function getFacadeAccessor()
    {
        return 'post_service';
    }
}