<?php

declare(strict_types=1);

namespace App\Common\Infrastructure\Laravel;

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
        $this->instance('path.base', $this->basePath());
        $this->instance('path.lang', __DIR__ . '/resources/lang');
        $this->instance('path.config', __DIR__ . '/config');
        $this->instance('path.public', __DIR__ . '/public');
        $this->instance('path.storage', __DIR__ . '/storage');
        $this->instance('path.database', __DIR__ . '/database');
        $this->instance('path.resources', __DIR__ . '/resources');
        $this->instance('path.bootstrap', __DIR__ . '/bootstrap');
    }

    private function setEnvironmentFilePath(): void
    {
        $this->environmentPath = $this->basePath . '/../../../..';
        Dotenv::createImmutable($this->basePath . '/../../../..')->load();
    }
}
