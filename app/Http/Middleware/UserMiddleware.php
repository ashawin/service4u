<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
      if (Auth::check() && Auth::user()->role == 3) {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->role == 2) {
        return redirect('/vendor/dashboard');
    }
    elseif (Auth::check() && Auth::user()->role == 1) {
            return redirect('/admin/dashboard');
    }
    }
}
