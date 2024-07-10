<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Enum\UserRole;
use App\Models\User;
use Auth;

class UserService
{
    public function create(UserDTO $dto): UserDTO
    {
        $user = User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
            'is_admin' => $dto->is_admin,
            'role' => UserRole::User
        ]);

        return UserDTO::from($user);
    }

    public function signIn(string $email, string $password): string
    {
        /**
         * @var User $user
         */
        $user = User::where('email', $email)->first();

        if (!empty($user)) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                $token = $user->createToken('accessToken')->plainTextToken;
                return $token;
            }
        }
    }
}
