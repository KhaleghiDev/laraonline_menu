<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale'); // گرفتن زبان از مسیر

        // لیست زبان‌های معتبر
        $availableLocales = ['en', 'fa', 'ar'];

        // نگاشت زبان به فرمت مناسب برای setlocale
        $localeMapping = [
            'fa' => 'fa_IR.UTF-8',
            'ar' => 'ar_SA.UTF-8',
            'en' => 'en_US.UTF-8',
        ];
dd($request->route());

        // جلوگیری از ریدایرکت به خودش
        if ($request->route()->getName() === 'home' && $locale && in_array($locale, $availableLocales)) {
            return $next($request);
        }

        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale); // تنظیم زبان لاراول

            // استفاده از زبان معتبر برای setlocale
            if (isset($localeMapping[$locale])) {
                setlocale(LC_ALL, $localeMapping[$locale]); // تنظیم زبان PHP
            }
        } else {
            // هدایت به انتخاب زبان
            return redirect()->route('lang');
        }

        return $next($request);
    }
}
