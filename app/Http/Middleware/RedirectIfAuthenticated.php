<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        // return $next($request);
        if (Auth::guard('admin')->check()) {
            // ULFAH JGN LUPA YA
            return redirect(route('landingpage'));
        } else if (Auth::guard('user')->check()) {
            return redirect(route('landingpage'));
        }

        return $next($request);
    }
}