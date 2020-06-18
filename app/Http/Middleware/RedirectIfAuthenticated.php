<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
=======
use App\Providers\RouteServiceProvider;
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
            return redirect('/home');
=======
            return redirect(RouteServiceProvider::HOME);
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
        }

        return $next($request);
    }
}
