<?php

declare(strict_types=1);

namespace App\Users\Infrastructure\Http\Routes;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

final class Kernel extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(__DIR__ . '/api.php');

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(__DIR__ . '/web.php');
        });
    }
}
