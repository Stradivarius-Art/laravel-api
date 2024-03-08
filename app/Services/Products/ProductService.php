<?php

namespace App\Services\Products;

use App\DTO\ProductDTO;
use App\Enum\ProductStatus;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function show(): Collection
    {
        $product = Product::query()
            ->select(['id', 'name', 'price'])
            ->whereStatus(ProductStatus::Published)
            ->get();
        return $product;
    }

    public function store(ProductDTO $dto): Product
    {
        auth()->login(User::query()->inRandomOrder()->whereIsAdmin(true)->first());
        /** @var Product $product */
        $product = auth()->user()->products()->create([
            'name' => $dto->name,
            'description' => $dto->description,
            'price' => $dto->price,
            'count' => $dto->count,
            'status' => $dto->status
        ]);

        $productUrl = $product->images()->create([
            'url' => $dto->url
        ]);

        return $product;
    }
}
