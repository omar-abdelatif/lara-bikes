<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle(Request $request, Closure $next)
    {
        if (auth(guard: 'web')->check()) {
            return redirect(to: RouteServiceProvider::HOME);
        }
        if (auth(guard: 'admin')->check()) {
            return redirect(to: RouteServiceProvider::DASHBOARD);
        }

        return $next($request);
    }
}
