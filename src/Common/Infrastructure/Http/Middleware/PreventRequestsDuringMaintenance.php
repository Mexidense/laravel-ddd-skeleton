<?php

declare(strict_types=1);

namespace Common\Infrastructure\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

final class PreventRequestsDuringMaintenance extends Middleware
{
    /** @var array */
    protected $except = [];
}
