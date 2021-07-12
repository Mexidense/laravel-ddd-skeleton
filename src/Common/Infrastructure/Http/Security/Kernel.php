<?php

declare(strict_types=1);

namespace Common\Infrastructure\Http\Security;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

final class Kernel extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
