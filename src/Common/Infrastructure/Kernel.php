<?php

declare(strict_types = 1);

namespace Common\Infrastructure;

use Common\Infrastructure\Events\Kernel as EventKernel;
use Common\Infrastructure\Http\Routes\Kernel as RouteKernel;
use Common\Infrastructure\Http\Security\Kernel as SecurityKernel;
use Illuminate\Support\ServiceProvider;

final class Kernel extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(SecurityKernel::class);
        $this->app->register(RouteKernel::class);
        $this->app->register(EventKernel::class);
    }

    public function boot(): void
    {
    }
}
