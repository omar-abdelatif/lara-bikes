<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next)
    {
        if (Auth::guard('web')->check()) {
            return redirect(to: RouteServiceProvider::HOME);
        }
        if (Auth::guard('admin')->check()) {
            return redirect(to: RouteServiceProvider::LOGIN);
        }

        return $next($request);
    }
}
