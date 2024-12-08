<?php

namespace App\Http\Resources\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductById extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "rating" => $this->rating(),
            "stars" => $this->stars(),
            "description" => $this->description,
            "images" => $this->images->map(fn ($images) => $images->url),
            "price" => $this->price,
            "count" => $this->count,
            "reviews" => $this->reviews->map(fn ($reviews) => [
                "id" => $reviews->id,
                "userName" => $reviews->user->name,
                "rating" => $reviews->rating,
                "text" => $reviews->text,
            ]),
        ];
    }
}
