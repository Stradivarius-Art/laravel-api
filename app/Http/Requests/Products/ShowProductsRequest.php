<?php

namespace App\Http\Requests\Products;

use App\Enum\ReviewStars;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ShowProductsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:products,id'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'rating' => ['required', 'integer', 'exists:reviews,rating'],
            'stars' => ['required', 'string', new Enum(ReviewStars::class)]
        ];
    }
}
