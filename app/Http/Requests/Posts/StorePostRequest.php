<?php

namespace App\Http\Requests\Posts;

use App\DTO\PostDTO;
use App\Enum\PostStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:25'],
            'body' => ['required', 'string', 'max:60'],
            'thumbnail' => ['required', 'string', 'max:100'],
            'status' => ['required', 'string', new Enum(PostStatus::class)],
            'name' => ['string']
        ];
    }

    public function data(): PostDTO
    {
        return PostDTO::from($this->validated());
    }
}