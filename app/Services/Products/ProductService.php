<?php

namespace App\Services\Products;

use App\Enum\ProductStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

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
}
