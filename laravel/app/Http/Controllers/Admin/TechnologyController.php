<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CategoryRequest;
use App\Models\Technology;
use Illuminate\Http\JsonResponse;

class TechnologyController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => Technology::paginate($request->per_page??10),
        ]);
    }

    /**
     * @param CategoryRequest $request
     * @param Technology $technology
     * @return JsonResponse
     */
    public function store(CategoryRequest $request, Technology $technology): JsonResponse
    {
        if ($technology->create($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Technology not created'], 400);
    }

    /**
     * @param CategoryRequest $request
     * @param Technology $technology
     * @return JsonResponse
     */
    public function update(CategoryRequest $request, Technology $technology): JsonResponse
    {
        if ($technology->update($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Technology not updated'], 400);
    }

    /**
     * @param Technology $technology
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Technology $technology): JsonResponse
    {
        $technology->delete();
        return response()->json(['status' => 'ok']);
    }
}
