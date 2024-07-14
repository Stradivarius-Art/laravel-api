<?php

namespace App\Services\Posts;

use App\Actions\PostAction;
use App\DTO\PostDTO;
use App\DTO\UpdatePostDTO;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

class PostService
{
    public function index(): Collection
    {
        $post = Post::query()
            ->select(['title', 'views', 'thumbnail', 'created_at'])
            ->get();
        return $post;
    }

    public function category(string $name): Category
    {
        return Category::create([
            'name' => $name
        ]);
    }

    public function store(PostDTO $dto): PostDTO
    {
        $action = new PostAction();
        $category = $this->category($dto->name);
        /**
         * @var User $user
         */
        $user = auth()->user();
        $post = $user->posts()->create([
            'title' => $dto->title,
            'body' => $dto->body,
            'thumbnail' => $action($dto->thumbnail),
            'status' => $dto->status,
            'category_id' => $category->id
        ]);
        return PostDTO::from($post);
    }

    public function comment(Post $post, string $text): Model
    {
        /**
         * @var User $user
         */
        $user = auth()->user();

        $comment = $post->comments()->create([
            'user_id' => $user->id,
            'text' => $text,
        ]);
        return $comment;
    }

    public function update(UpdatePostDTO $dto, Post $post): JsonResponse
    {
        $updated = $post->update([
            'title' => $dto->title,
            'body' => $dto->body,
            'status' => $dto->status
        ]);

        if (!empty($updated)) {
            return response()->json('Пост был успешно обновлен', 200);
        }
    }
}