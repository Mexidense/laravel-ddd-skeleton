<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Http\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

final class Handler extends ExceptionHandler
{
    /** @var array */
    protected $dontReport = [];

    /** @var string[] */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $exception) {
        });
    }
}
