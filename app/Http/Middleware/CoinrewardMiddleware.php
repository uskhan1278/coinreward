<?php

namespace App\Http\Middleware;

use Closure;

class CoinrewardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
    }
}
