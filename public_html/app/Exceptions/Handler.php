<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Spatie\Permission\Exceptions\UnauthorizedException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(\Throwable $exception)
    {
        parent::report($exception);
    }
    public function render($request, \Throwable $exception)
    {
        if ($exception instanceof UnauthorizedException) {
            return response()->json([
                'responseMessage' => 'You do not have required authorization.',
                'responseStatus'  => 403,
            ]);
        }

        return parent::render($request, $exception);
    }
}
