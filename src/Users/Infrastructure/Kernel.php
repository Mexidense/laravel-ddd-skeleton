<?php

declare(strict_types=1);

namespace App\Users\Infrastructure;

use App\Users\Infrastructure\Http\Routes\Kernel as RouteKernel;
use Illuminate\Support\ServiceProvider;

final class Kernel extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(RouteKernel::class);
    }

    public function boot(): void
    {
    }
}
