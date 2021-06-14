<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

final class VerifyCsrfToken extends Middleware
{
    /** @var array */
    protected $except = [];
}
