<?php

namespace App\Http\Resources\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostById extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "title" => $this->title,
            "body" => $this->body,
            "views" => $this->views,
            "authorName" => $this->user->name,
            "createdAt" => date($this->created_at),
            "categoryName" => $this->category->name,
            "comments" => $this->comments->map(fn ($comments) => [
                "userName" => $comments->user->name,
                "text" => $comments->text
            ]),
        ];
    }
}
