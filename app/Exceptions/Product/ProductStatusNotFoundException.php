<?php

namespace App\Exceptions\Product;

use Exception;

class ProductStatusNotFoundException extends Exception
{
    protected $message = 'The product does not match the published status, so it was not found';
}
