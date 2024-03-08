<?php

namespace App\Http\Resources\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetPosts extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "title" => $this->title,
            "thumbnail" => $this->thumbnail,
            "views" => $this->views,
            "createdAt" => date($this->created_at)
        ];
    }
}
