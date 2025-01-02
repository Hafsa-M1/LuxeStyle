<?php
namespace App\Http\Middleware;

use Closure;

class DisableCsrf
{
    public function handle($request, Closure $next)
    {
        // Skip CSRF validation
        return $next($request);
    }
}
