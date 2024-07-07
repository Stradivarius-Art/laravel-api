<?php

namespace App\DTO;

use App\Enum\PostStatus;
use Spatie\LaravelData\Data;

class PostDTO extends Data
{
    public string $title;
    public string $body;
    public string $thumbnail;
    public PostStatus $status;
    public string $name;
}