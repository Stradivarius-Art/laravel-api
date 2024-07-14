<?php

namespace App\Http\Middleware;

use App\Exceptions\NoAccessToOperationException;
use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostsAccessMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Post $posts
         */
        $posts = $request->route('posts');

        if (!$posts->hasAccess()) {
            throw new NoAccessToOperationException();
        }

        return $next($request);
    }
}