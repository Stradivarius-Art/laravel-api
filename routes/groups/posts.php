<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::apiResource('/posts', PostController::class)->middleware('auth:sanctum');
Route::controller(PostController::class)->group(function () {
    Route::post('/posts/{post}/comment', 'storeComment')->middleware('auth:sanctum');
});