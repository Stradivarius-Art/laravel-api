<?php

namespace App\Enum;

enum UserRole: string
{
    case Admin = 'admin';
    case Moderator = 'moderator';
    case User = 'user';
    case Guest = 'guest';
}
