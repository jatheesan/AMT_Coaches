<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if (!in_array($locale, ['en', 'ko'])) {
            $locale = 'en';
        }

        App::setLocale($locale);

        session(['locale' => $locale]); // store selected language

        return $next($request);


       

       
    }
}
