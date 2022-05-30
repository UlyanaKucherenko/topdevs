<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $geoIpIsoCode = Cache::rememberForever('iso_' . $request->ip(), function () use ($request) {
            return geoip($request->ip())->iso_code ?? 'UA';
        });
        $user_country = Cache::rememberForever('country' . $request->ip(), function () use ($geoIpIsoCode) {
            return Country::where('iso_code', $geoIpIsoCode)->first();
        });

        return response()->json([
            'user_country' => new CountryResource($user_country),
            'all_countries' => CountryResource::collection(Country::all())
        ]);
    }
}
