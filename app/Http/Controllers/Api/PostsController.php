<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Facades\Post as FacadesPost;
use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\GetPosts;
use App\Http\Resources\Posts\PostById;
use App\Http\Requests\Posts\StorePostRequest;

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

    public function store(StorePostRequest $request)
    {
        return FacadesPost::store($request->data());
    }

    public function storeComment(Post $post, Request $request)
    {
        return FacadesPost::comment($post, $request->input('text'));
    }
}
