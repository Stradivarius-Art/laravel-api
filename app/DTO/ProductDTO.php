<?php

namespace App\DTO;

use App\Enum\ProductStatus;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class ProductDTO extends Data
{
    public string $name;
    public string $description;
    public int $price;
    public int $count;
    public ProductStatus $status;
    #[MapInputName('images.url')]
    public $url;
}
