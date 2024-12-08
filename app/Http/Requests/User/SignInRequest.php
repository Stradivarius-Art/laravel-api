<?php

namespace App\Http\Requests\User;

use App\Facades\User;
use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function data(): string
    {
        return User::signIn(
            $this->input('email'),
            $this->input('password')
        );
    }
}
