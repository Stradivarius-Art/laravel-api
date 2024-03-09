<?php

namespace App\Facades;

use App\DTO\ProductDTO;
use Illuminate\Support\Facades\Facade;
use App\Http\Requests\Products\ShowProductsRequest;

class Product extends Facade
{
    /**
     * @method static \App\Models\Product show()
     * @method  store(ProductDTO $dto)
     * @see \App\Services\Products\ProductService
     */

    protected static function getFacadeAccessor()
    {
        return 'product_service';
    }
}
