<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreateTagRequest;
use App\Http\Requests\Post\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;

class TagController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index()
    {
        return response()->json(
            Tag::get(['id', 'name', 'slug'])
        );
    }

    /**
     * @param CreateTagRequest $request
     * @param Tag $tag
     * @return JsonResponse
     */
    public function store(CreateTagRequest $request, Tag $tag): JsonResponse
    {
        $new_tag = $tag->firstOrCreate(['name' => $request->name]);
        return response()->json([
            'status' => 'ok',
            'tag' => $new_tag
        ]);
    }

    /**
     * @param CreateTagRequest $request
     * @param Tag $tag
     * @return JsonResponse
     */
    public function update(CreateTagRequest $request, Tag $tag): JsonResponse
    {
        if ($tag->update($request->all())) {
            return response()->json([
                'status' => 'ok',
                'tag' => $tag
            ]);
        }
        return response()->json(['error' => 'Tag not updated'], 400);
    }

    /**
     * @param Tag $tag
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Tag $tag): JsonResponse
    {
        $tag->delete();
        return response()->json(['status' => 'ok']);
    }
}
