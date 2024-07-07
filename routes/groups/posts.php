<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

Route::controller(PostsController::class)->prefix('/posts')->group(function () {
    Route::get('', 'index')->name('product.index');
    Route::get('/{post}', 'show')->name('product.show');
    Route::post('', 'store')->name('product.store')->middleware('auth:sanctum');
    Route::post('/{post}/comment', 'storeComment')->name('product.store.comment')->middleware('auth:sanctum');
});
