<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => Category::paginate($request->per_page??10),
        ]);
    }

    /**
     * @param CategoryRequest $request
     * @param Category $category
     * @return JsonResponse
     */
    public function store(CategoryRequest $request, Category $category): JsonResponse
    {
        if ($category->create($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Category not created'], 400);
    }

    /**
     * @param CategoryRequest $request
     * @param Category $category
     * @return JsonResponse
     */
    public function update(CategoryRequest $request, Category $category): JsonResponse
    {
        if ($category->update($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Category not updated'], 400);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();
        return response()->json(['status' => 'ok']);
    }
}
