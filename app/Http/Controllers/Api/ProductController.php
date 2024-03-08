<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Facades\Product as FacadesProduct;
use App\Http\Requests\Products\StoreProductRequest;
use App\Http\Resources\Products\GetProducts;
use App\Http\Resources\Products\ProductById;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        return ProductById::make($product);
    }

    public function show()
    {
        return GetProducts::collection(FacadesProduct::show());
    }

    public function store(StoreProductRequest $request)
    {
        return FacadesProduct::store($request->data());
    }
}
