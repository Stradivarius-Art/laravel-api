<?php

namespace App\Exceptions;

use Throwable;
use App\Exceptions\AdminException;
use App\Exceptions\NoAccessToOperationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (NoAccessToOperationException $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage(),
            ], 403);
        });

        $this->renderable(function (AdminException $e) {
            return response()->json([
                'status' => 'forbidden',
                'message' => $e->getMessage(),
            ], 403);
        });
    }
}