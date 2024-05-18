<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            $locale = Auth::user()->locale;
            App::setLocale($locale);
        } else {
            $locale = session('locale', config('app.locale'));
            App::setLocale($locale);
        }


        return $next($request);
    }
}
