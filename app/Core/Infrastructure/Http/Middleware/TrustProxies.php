<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

final class TrustProxies extends Middleware
{
    /** @var array|string|null */
    protected $proxies;

    /** @var int */
    protected $headers = Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
}
