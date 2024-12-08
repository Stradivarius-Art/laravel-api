<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::controller(UserController::class)->group(function () {
    Route::post('/user/register', 'create');
    Route::post('/user/login', 'signIn');
});
