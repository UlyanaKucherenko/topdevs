<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;


class GeoIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $black_list_country = ['India', 'Pakistan', 'Bangladesh'];

        if (in_array(geoip($request->ip())->country, $black_list_country)) {
            Log::alert('A blacklisted user has been redirected');
            return redirect('https://www.google.com');
        }

        return $next($request);
    }
}
