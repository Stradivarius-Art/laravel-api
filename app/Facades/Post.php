<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Post extends Facade
{
    /**
     * @method \App\Models\Post index()
     * 
     * @see \App\Services\Posts\PostService
     */

    protected static function getFacadeAccessor()
    {
        return 'post_service';
    }
}
