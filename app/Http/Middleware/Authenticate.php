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
                return route('404');
            } elseif (Request::is(app()->getLocale() . 'admin/dashboard')) {
                return route('404');
            } else {
                return route('404');
            }
        }
    }
}
