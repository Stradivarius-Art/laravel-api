<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class UserDTO extends Data
{
    public string $name;
    public string $email;
    public string $password;
    public bool $is_admin;
}
