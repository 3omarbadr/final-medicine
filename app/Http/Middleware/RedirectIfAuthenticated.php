<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? ['web', 'admin'] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && $guard == 'web') {
                return redirect()->intended(RouteServiceProvider::HOME);
            }

            if (Auth::guard($guard)->check() && $guard == 'admin') {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            }
        }

        return $next($request);
    }
}
