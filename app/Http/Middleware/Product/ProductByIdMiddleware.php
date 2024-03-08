<?php

namespace App\Http\Middleware\Product;

use App\Models\Product;
use Closure;
use App\Enum\ProductStatus;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductByIdMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $productId = $request->route('product');

        if ($productId->status === ProductStatus::Draft || $productId->status === ProductStatus::Test) {
            return response()->json(['message' => 'Product not Found'], 404);
        }

        return $next($request);
    }
}
