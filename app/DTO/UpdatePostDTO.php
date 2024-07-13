<?php

namespace App\DTO;

use App\Enum\PostStatus;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;

class UpdatePostDTO extends Data
{
    #[Required, Max(150), StringType]
    public string $title;

    public string $body;

    #[Required, Enum(PostStatus::class)]
    public PostStatus $status;
}