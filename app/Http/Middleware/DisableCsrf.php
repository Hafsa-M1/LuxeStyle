<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DisableCsrf
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Temporarily disable CSRF protection for this request
        App::instance('Illuminate\Contracts\Debug\ExceptionHandler', new class extends \Illuminate\Foundation\Exceptions\Handler {
            public function report(\Throwable $exception) {}
            public function render($request, \Throwable $exception) {
                return parent::render($request, $exception);
            }
        });

        return $next($request);
    }
}
