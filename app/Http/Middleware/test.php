<?php
	
	namespace App\Http\Middelware;

	use Closure;

	class test
	{
		/**
	     * Handle an incoming request.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  \Closure  $next
	     * @param  string|null  $guard
	     * @return mixed
	     */
		public function handle($request, Closure $next)
		{
			$ip = $request->ip();
			if($ip == "::1")
			{
				return redirect('/');
			}
			return $next($request);
		}
	}