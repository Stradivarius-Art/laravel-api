<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

Route::controller(PostsController::class)->prefix('/posts')->group(function () {
    Route::get('', 'index')->name('product.index');
    Route::get('/{post}', 'show')->name('product.show');
});
