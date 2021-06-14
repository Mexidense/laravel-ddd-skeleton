<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Security;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

final class GeneralAuthentication extends ServiceProvider
{
    protected $policies = [];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
