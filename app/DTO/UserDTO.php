<?php

namespace App\DTO;

use Spatie\LaravelData\Attributes\Validation\BooleanType;
use Spatie\LaravelData\Attributes\Validation\Confirmed;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

class UserDTO extends Data
{
    #[Required, StringType, Max(60)]
    public string $name;
    #[Required, StringType, Email]
    public string $email;
    #[Required, Confirmed]
    public $password;
    #[Required, BooleanType]
    public bool $is_admin;
}
