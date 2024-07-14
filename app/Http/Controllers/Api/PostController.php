<?php

namespace App\Http\Controllers\Api;

use App\DTO\PostDTO;
use App\Models\Post;
use App\DTO\UpdatePostDTO;
use Illuminate\Http\Request;
use App\Facades\Post as FacadesPost;
use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\GetPosts;
use App\Http\Resources\Posts\PostById;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('posts.access')->only(['update', 'destroy']);
    }

    public function index()
    {
        return GetPosts::collection(FacadesPost::index());
    }

    public function store(PostDTO $dto)
    {
        return FacadesPost::store($dto);
    }

    public function show(Post $post)
    {
        return PostById::make($post);
    }

    public function update(Post $post, UpdatePostDTO $dto)
    {
        return FacadesPost::update($dto, $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Пост был успешно удален');
    }

    public function storeComment(Post $post, Request $request)
    {
        return FacadesPost::comment($post, $request->input('text'));
    }
}