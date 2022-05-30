<?php

namespace App\Models;

use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Jobs\PublishPost;
use App\Models\Traits\Picturable;
use App\Services\Constants\PostStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes, Picturable;

    protected $fillable = ['title', 'slug', 'description', 'short_description','meta_title', 'meta_description', 'keywords','read_time','status','publish_at', 'is_show_to_main_page', 'banner_text', 'is_active_banner'];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if(!$model->short_description){
                $model->short_description = strip_tags($model->description);
            }
            if(!$model->status || !in_array($model->status, PostStatus::getStatuses())){
                $model->status = PostStatus::getDefaultStatus();
            }
            $model->slug = Str::slug($model->slug);
        });
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getAll(Request $request): LengthAwarePaginator
    {
        $posts = Post::whereStatus(PostStatus::POST_PUBLISH)
            ->with(['picture','categories', 'industries', 'tags'])
            ->orderBy('created_at', 'DESC');
        if($request->has('categories') && $request->categories){
            $posts->whereHas('categories', function($q) use($request) {$q->whereIn('slug',explode(',',$request->categories));}); // like /posts?categories=business,design
        }
        if($request->has('industries') && $request->industries){
            $posts->whereHas('industries', function($q) use($request) {$q->whereIn('slug',explode(',',$request->industries));}); // like /posts?industries=sports-fitness,healthcare
        }
        if($request->has('tags') && $request->tags){
            $posts->whereHas('tags', function($q) use($request) {$q->whereIn('slug',explode(',',$request->tags));}); // like /posts?tags=sports,health
        }
        return $posts->paginate($request->per_page??4);
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class)->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    /**
     * @param CreatePostRequest $request
     * @return Post
     * @throws \Exception
     */
    public function createPost(CreatePostRequest $request): Post
    {
        if ($request->publish_at){
            $request->merge(['publish_at' => ((new Carbon($request->publish_at))->addMinutes($request->timezone_offset))->format('Y-m-d H:i')]);
        }
        $post = $this->create($request->except('picture', 'picture_meta_alt', 'picture_meta_title','categories', 'industries', 'tags'));

        $post->categories()->sync($request->get('categories'));
        $post->industries()->sync($request->get('industries'));
        $post->tags()->sync($request->get('tags'));
        $post->saveImageWithMeta($request->picture, $request->picture_meta_alt??'', $request->picture_meta_title??'');

        return $post;
    }

    /**
     * @param UpdatePostRequest $request
     * @return bool
     * @throws \Exception
     */
    public function updatePost(UpdatePostRequest $request): bool
    {
        if ($request->publish_at){
            $request->merge(['publish_at' => ((new Carbon($request->publish_at))->addMinutes($request->timezone_offset))->format('Y-m-d H:i')]);
        }

        $post = $this->update($request->except('picture', 'picture_meta_alt', 'picture_meta_title', 'categories', 'industries', 'tags'));
        if($request->has('categories')){
            $this->categories()->detach();
            $this->categories()->sync($request->get('categories'));
        }
        if($request->has('industries')){
            $this->industries()->detach();
            $this->industries()->sync($request->get('industries'));
        }
        if($request->has('tags')){
            $this->tags()->detach();
            $this->tags()->sync($request->get('tags'));
        }
        if($request->has('picture')){
            $this->removeImage([$this->picture->path,$this->picture->thumbnail]);
            $this->saveImageWithMeta($request->picture, $request->picture_meta_alt??'', $request->picture_meta_title??'');
        }
        if ($request->has('picture_meta_alt') || $request->has('picture_meta_title')){
            $this->saveImageMeta($request->picture_meta_alt??'', $request->picture_meta_title??'');
        }

        return $post;
    }

    /**
     * @return bool|null
     */
    public function removePost(): ?bool
    {
        $this->removeImage([$this->picture->path,$this->picture->thumbnail]);
        $this->categories()->detach();
        $this->industries()->detach();
        $this->tags()->detach();
        return $this->forceDelete();
    }

    /**
     * @param Post $post
     * @return mixed
     */
    public function getThreeRandomPosts(Post $post):Collection
    {
        return $this->whereStatus(PostStatus::POST_PUBLISH)
            ->where('slug', '!=', $post->slug)
            ->with('picture','categories','tags')
            ->orderByRaw('RAND()')
            ->limit(3)
            ->get();
    }

    /**
     * @param Request $request
     * @param Post $post
     * @throws \Exception
     */
    public function addPostToJob(Request $request, Post $post)
    {
        if ($request->publish_at) {
            PublishPost::dispatch($post)
                ->delay(new Carbon($request->publish_at));
        }
    }

    /**
     * @return Collection
     */
    public function getThreePublishedPosts()
    {
        return $this->whereStatus(PostStatus::POST_PUBLISH)
            ->with('picture')
            ->orderByRaw('RAND()')
            ->limit(3)
            ->get();
    }

    /**
     * @return Collection
     */
    public function getThreePublishedPostsByDate()
    {
        return $this->whereStatus(PostStatus::POST_PUBLISH)
            ->with('picture')
            ->latest()
            ->limit(3)
            ->get();
    }

    /**
     * @param string $industry
     * @return Collection
     */
    public function getThreePublishedPostsForIndustry(string $industry): Collection
    {
        $posts_for_industry = $this->whereStatus(PostStatus::POST_PUBLISH)
            ->whereHas('industries', function ($q) use ($industry) {
                $q->where('slug', '=', $industry);
            })
            ->with('picture')
            ->latest()
            ->limit(3)
            ->get();
        $count_posts = $posts_for_industry->count();
        $posts_for_industry_id = $posts_for_industry->pluck('id')->toArray();
        if ($count_posts < 3) {
            $new_posts = $this->whereStatus(PostStatus::POST_PUBLISH)
                ->whereNotIn('id', $posts_for_industry_id)
                ->with('picture')
                ->orderByRaw('RAND()')
                ->limit(3 - $count_posts)
                ->get();
            return $posts_for_industry->merge($new_posts);
        }
        return $posts_for_industry;
    }
}
