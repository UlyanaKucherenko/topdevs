<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsResource;
use App\Http\Resources\PostShowResource;
use App\Http\Resources\TreePostsResource;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Post;
use App\Models\Tag;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\View\View
     */
    public function index(Request $request, Post $post)
    {
        Meta::prependTitle(config('meta.Blog.metaTitle'))
            ->setDescription(config('meta.Blog.metaDescription'))
            ->setKeywords(config('meta.Blog.keywords'));

        $posts = Post::with('categories', 'industries', 'tags', 'picture')
            ->where('is_show_to_main_page', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        $categories = Category::get(['name', 'slug']);
        $industries = Industry::get(['name', 'slug']);
        $tags = Tag::get(['name', 'slug']);

        return view('blog.index', [
            'selected_posts' => PostsResource::collection($posts),
            'posts' => PostsResource::collection($post->getAll($request)),
            'dropdowns' => [
                [   'name' => 'Categories',
                    'slug' => 'categories',
                    'filters' => $categories
                ],
                [   'name' => 'Industries',
                    'slug' => 'industries',
                    'filters' => $industries
                ],
            ],
            'tags' => [
                $tags
            ]
        ]);
    }

    /**
     * @param Post $blog
     * @return View
     */
    public function show(Post $blog): View
    {
        Meta::prependTitle($blog->meta_title)
            ->setDescription($blog->meta_description)
            ->setKeywords($blog->keywords);

        return view('blog.post',
            [   'post' => PostShowResource::make($blog->loadMissing('picture','categories', 'tags')),
                'other_posts' => TreePostsResource::collection($blog->getThreeRandomPosts($blog))
            ]);
    }
}
