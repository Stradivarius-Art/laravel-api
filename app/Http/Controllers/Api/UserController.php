<?php

namespace App\Http\Controllers\Api;

use App\Facades\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\SignInRequest;
use App\Http\Requests\User\SignUpRequest;

class UserController extends Controller
{
    public function create(SignUpRequest $request)
    {
        return User::create($request->data());
    }

    public function signIn(SignInRequest $request): array
    {
        return [
            'accessToken' => $request->data()
        ];
    }
}
