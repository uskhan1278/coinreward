<?php
	
	namespace App\http\middelware;

	use Clouser;

	class Routes
	{

		public function handle($request, Clouser $next)
		{
			$ip = $request->ip();
			if($ip = "::1")
			{
				echo "Middleware";
			}
			return $next($request);
		}
	}


		