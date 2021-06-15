<?php

declare(strict_types=1);

namespace App\Common\Infrastructure;

use Dotenv\Dotenv;

final class Application extends \Illuminate\Foundation\Application
{
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
        $this->setEnvironmentFilePath();
    }

    protected function bindPathsInContainer(): void
    {
        $this->instance('path', 'src');
        $this->instance('path.lang', __DIR__ . '/LaravelResources/resources/lang');
        $this->instance('path.config', __DIR__ . '/LaravelResources/config');
        $this->instance('path.public', __DIR__ . '/LaravelResources/public');
        $this->instance('path.storage', __DIR__ . '/LaravelResources/storage');
        $this->instance('path.database', __DIR__ . '/LaravelResources/database');
        $this->instance('path.resources', __DIR__ . '/LaravelResources/resources');
        $this->instance('path.bootstrap', __DIR__ . '/LaravelResources/bootstrap');
    }

    public function setEnvironmentFilePath(): void
    {
        $this->environmentPath = $this->basePath . '/../../../..';
        Dotenv::createImmutable($this->basePath . '/../../../..')->load();
    }
}
