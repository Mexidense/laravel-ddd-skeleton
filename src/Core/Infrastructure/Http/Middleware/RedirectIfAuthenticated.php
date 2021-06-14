<?php

declare(strict_types=1);

namespace App\Core\Infrastructure\Http\Middleware;

use App\Core\Infrastructure\Http\Routes\Kernel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(Kernel::HOME);
            }
        }

        return $next($request);
    }
}
