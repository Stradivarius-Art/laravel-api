<?php

namespace App\DTO;

use App\Enum\PostStatus;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Image;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

class PostDTO extends Data
{
    #[Required, Max(150), StringType]
    public string $title;
    public string $body;
    #[Image, Max(500000)]
    public $thumbnail;
    #[Required, Enum(PostStatus::class)]
    public PostStatus $status;
    #[Required, StringType]
    public string $name;
}