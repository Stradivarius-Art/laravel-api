<?php

namespace App\Http\Controllers\Api;

use App\DTO\PostDTO;
use App\DTO\UpdatePostDTO;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Facades\Post as FacadesPost;
use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\GetPosts;
use App\Http\Resources\Posts\PostById;

class PostsController extends Controller
{
    public function index()
    {
        return GetPosts::collection(FacadesPost::index());
    }

    public function show(Post $post)
    {
        return PostById::make($post);
    }

    public function store(PostDTO $dto)
    {
        return FacadesPost::store($dto);
    }

    public function storeComment(Post $post, Request $request)
    {
        return FacadesPost::comment($post, $request->input('text'));
    }

    public function update(Post $post, UpdatePostDTO $dto)
    {
        return FacadesPost::update($dto, $post);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return response()->json('Пост был успешно удален');
    }
}