<?php

namespace App\Enum;

enum PostStatus: string
{
    case Published = 'published';
    case Private = 'private';
    case Draft = 'draft';
}
