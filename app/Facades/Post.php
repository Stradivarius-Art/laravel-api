<?php

namespace App\Facades;

use App\DTO\PostDTO;
use Illuminate\Support\Facades\Facade;

class Post extends Facade
{
    /**
     * @method static \App\Models\Post index()
     * @method static  \Illuminate\Database\Eloquent\Model store(PostDTO $dto)
     * @method static \Illuminate\Database\Eloquent\Model comment(\App\Models\Post $post, string $text)
     * @see \App\Services\Posts\PostService
     */

    protected static function getFacadeAccessor()
    {
        return 'post_service';
    }
}
