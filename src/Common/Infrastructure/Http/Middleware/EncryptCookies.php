<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /** @var array */
    protected $except = [];
}
