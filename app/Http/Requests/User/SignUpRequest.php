<?php

namespace App\Http\Requests\User;

use App\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'confirmed'],
            'is_admin' => ['required', 'boolean']
        ];
    }

    public function data(): UserDTO
    {
        return UserDTO::from($this->validated());
    }
}
