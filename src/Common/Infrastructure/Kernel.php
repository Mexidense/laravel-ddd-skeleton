<?php

declare(strict_types = 1);

namespace App\Common\Infrastructure;

use App\Common\Infrastructure\Events\Kernel as EventKernel;
use App\Common\Infrastructure\Http\Routes\Kernel as RouteKernel;
use App\Common\Infrastructure\Http\Security\Kernel as SecurityKernel;
use App\User\Infrastructure\Kernel as UserDomainKernel;
use Illuminate\Support\ServiceProvider;

final class Kernel extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(SecurityKernel::class);
        $this->app->register(RouteKernel::class);
        $this->app->register(EventKernel::class);

        $this->app->register(UserDomainKernel::class);
    }

    public function boot(): void
    {
    }
}
