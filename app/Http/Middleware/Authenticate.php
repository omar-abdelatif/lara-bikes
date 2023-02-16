<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // if (Request::is('main')) {
            //     return route('404');
            // } elseif (Request::is('admin/dashboard')) {
            //     return route('404');
            // } else {
            //     return route('404');
            // }
            if (Request::is(app() . '/main')) {
                return route('404');
            } elseif (Request::is(app() . '/admin/dashboard')) {
                return route('not-found');
            } else {

            }
        }
    }
}
