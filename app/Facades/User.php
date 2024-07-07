<?php

namespace App\Facades;

use App\DTO\UserDTO;
use App\Services\UserService;
use App\Models\User as ModelUser;
use Illuminate\Support\Facades\Facade;

class User extends Facade
{
    /**
     * @method static ModelUser create(UserDTO $dto)
     * @method static string signIn(string $email, string $password)
     * @see UserService
     */
    protected static function getFacadeAccessor()
    {
        return 'authentication';
    }
}
