<?php

namespace App\Exceptions;

use Exception;

class AdminException extends Exception
{
    protected $message = 'No access rights';
}