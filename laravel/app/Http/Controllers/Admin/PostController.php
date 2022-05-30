<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Post;
use App\Models\Tag;
use App\Services\Constants\PostStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'data' => Post::with(['picture','categories'])
                ->orderBy('created_at', 'DESC')
                ->paginate($request->per_page??10),
            'status' => PostStatus::getStatuses()
        ]);
    }

    /**
     * @param CreatePostRequest $request
     * @param Post $post
     * @return JsonResponse
     * @throws \Exception
     */
    public function store(CreatePostRequest $request, Post $post): JsonResponse
    {
        if ($new_post = $post->createPost($request)) {
            $post->addPostToJob($request, $new_post);
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Post not created']);
    }

    /**
     * @param Post $post
     * @return JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'post' => $post->loadMissing('picture','categories', 'industries', 'tags'),
            'picture_mime_type' => mime_content_type(storage_path('app/public/' . $post->picture->path)),
            'status' => PostStatus::getStatuses()
        ]);
    }

    /**
     * @param UpdatePostRequest $request
     * @param Post $post
     * @return JsonResponse
     * @throws \Exception
     */
    public function update(UpdatePostRequest $request, Post $post): JsonResponse
    {
        if ($post->updatePost($request)) {
            $post->addPostToJob($request, $post);
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Post not updated']);
    }

    /**
     * @param Post $post
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Post $post): JsonResponse
    {
        $post->delete();
        return response()->json(['status' => 'ok']);
    }

    /**
     * @param Post $post
     * @return JsonResponse
     */
    public function destroyForce(Post $post): JsonResponse
    {
        return response()->json(['status' => $post->removePost()]);
    }

    /**
     * @param Category $category
     * @param Industry $industry
     * @param Tag $tag
     * @return JsonResponse
     */
    public function filters(Category $category, Industry $industry, Tag $tag): JsonResponse
    {
        return response()->json([
            [   'name' => 'Categories',
                'slug' => 'categories',
                'filters' => $category->get(['id', 'name', 'slug']),
            ],
            [   'name' => 'Industries',
                'slug' => 'industries',
                'filters' => $industry->get(['id', 'name', 'slug']),
            ],
            [   'name' => 'Tags',
                'slug' => 'tags',
                'filters' => $tag->get(['id', 'name', 'slug']),
            ],
            [   'name' => 'Statuses',
                'filters' => PostStatus::getStatuses(),
            ]
        ]);
    }
}
