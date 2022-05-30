<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsResource;
use App\Http\Resources\TreePostsResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request, Post $post)
    {
        return PostsResource::collection($post->getAll($request));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getThreeRandomPosts(Post $post)
    {
        return TreePostsResource::collection($post->getThreePublishedPosts());
    }

    /**
     * @param Post $post
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getThreeRandomPostsForIndustry(Post $post, Request $request)
    {
        $data = $request->validate([
            'industry' => 'required|string|min:5|max:30'
        ]);
        return TreePostsResource::collection($post->getThreePublishedPostsForIndustry($data['industry']));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getThreeRandomPostsByDate(Post $post)
    {
        return TreePostsResource::collection($post->getThreePublishedPostsByDate());
    }
}
