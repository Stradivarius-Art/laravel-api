<?php

namespace App\Http\Controllers\Api;

use App\DTO\UserDTO;
use App\Facades\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\SignInRequest;
use App\Http\Requests\User\SignUpRequest;

class UserController extends Controller
{
    public function create(UserDTO $dto)
    {
        return User::create($dto);
    }

    public function signIn(SignInRequest $request): array
    {
        return [
            'accessToken' => $request->data()
        ];
    }
}
