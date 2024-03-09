<?php

namespace App\Http\Requests\Products;

use App\DTO\ProductDTO;
use App\Enum\ProductStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreProductRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'count' => ['required', 'integer'],
            'status' => ['required', 'string', new Enum(ProductStatus::class)],
            'images' => ['required', 'array', 'required_array_keys:url'],
            'images.url' => ['string', 'url'],
        ];
    }

    public function data(): ProductDTO
    {
        return ProductDTO::from($this->validated());
    }
}
