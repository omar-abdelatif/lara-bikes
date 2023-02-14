<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Request::is(app()->getLocale() . 'main')) {
                return route('signin');
            } elseif (Request::is(app()->getLocale() . 'admin/dashboard')) {
                return route('login');
            } else {
                return route('404');
            }
        }
    }
}
