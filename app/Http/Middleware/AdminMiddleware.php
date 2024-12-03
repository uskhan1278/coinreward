<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(!empty(session('admin_email')))
        {
            $response = $next($request);
            return $response->header('Cache-Control','max-age=0, nocache, no-store, must-revalidate');
        }
        else
        {
            return redirect('/admin_login');
        } 
    }
}
