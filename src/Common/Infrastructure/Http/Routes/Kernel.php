<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Http\Routes;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

final class Kernel extends ServiceProvider
{
    /** @var string */
    public const HOME = '/home';
    /** @var int */
    public const API_RATE_LIMIT = 60;

    public function boot(): void
    {
        $this->configureRateLimiting();

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

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(self::API_RATE_LIMIT)
                ->by(optional(
                    $request->user())->id ?: $request->ip()
                );
        });
    }
}
