<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Media;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * @param Media $media
     * @return JsonResponse
     */
    public function index(Media $media): JsonResponse
    {
        return response()->json([
            'data' => $media->all(),
        ]);
    }

    /**
     * @param Request $request
     * @param Media $media
     * @return JsonResponse
     */
    public function store(Request $request, Media $media): JsonResponse
    {
        return response()->json([
            'data' => $media->createMedia($request),
        ]);
    }

    /**
     * @param Media $media
     * @return JsonResponse
     */
    public function show(Media $media): JsonResponse
    {
        return response()->json([
            'data' => $media->pictures,
        ]);
    }

    /**
     * @param Media $media
     * @return JsonResponse
     */
    public function destroy(Media $media): JsonResponse
    {
        return response()->json([
            'data' => $media->removeMedia(),
        ]);
    }
}
