<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

Route::controller(PostsController::class)
    ->middleware('auth:sanctum')
    ->prefix('/posts')
    ->group(function () {
        Route::get('', 'index')->name('product.index');
        Route::get('/{post}', 'show')->name('product.show');
        Route::post('', 'store')->name('product.store');
        Route::post('/{post}/comment', 'storeComment')->name('product.store.comment');
        Route::patch('/{post}', 'update')->name('product.update');
        Route::delete('/{post}', 'delete')->name('product.delete');
    });