<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::controller(ProductController::class)->prefix('/products')->group(function () {
    Route::get('', 'show')->name('product.show');
    Route::get('/{product}', 'index')->name('product.index')->middleware('productById');
});
