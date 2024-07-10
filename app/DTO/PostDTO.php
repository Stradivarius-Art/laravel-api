<?php

namespace App\DTO;

use App\Enum\PostStatus;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Image;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\Size;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class PostDTO extends Data
{
    #[Required, Max(150), StringType]
    public string $title;
    #[Optional]
    public string $body;
    #[Optional, Image, StringType, Size(500)]
    public string $thumbnail;
    #[Required, Enum(PostStatus::class)]
    public PostStatus $status;
    #[Required, StringType]
    public string $name;
}