<?php

namespace App\Exceptions;

use Exception;

class UpdatePostException extends Exception
{
    protected string $message = 'Данные не корректны';
}
