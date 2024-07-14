<?php

namespace App\Http\Middleware;

use App\Enum\PostStatus;
use App\Exceptions\NoAccessToOperationException;
use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Post $post
         */
        $post = $request->route('post');

        if ($post->status === PostStatus::Draft) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        } else if ($post->status === PostStatus::Private && !$post->hasAccess()) {
            throw new NoAccessToOperationException();
        }

        return $next($request);
    }
}