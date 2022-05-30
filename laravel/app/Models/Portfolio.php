<?php

namespace App\Models;

use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Models\Traits\Picturable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use Picturable;
    protected $fillable = ['title', 'slug', 'description', 'sub_title', 'background_color', 'link', 'case_industry', 'location'];

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = Str::slug($model->slug)??Str::slug($model->title);
        });
    }

    /**
     * @return BelongsToMany
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class)->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class)->withTimestamps();
    }

    /**
     * @return BelongsToMany
     */
    public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class)->withTimestamps();
    }

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getAll(Request $request): LengthAwarePaginator
    {
        $portfolio = Portfolio::with(['picture', 'services', 'technologies', 'industries']);
        if($request->has('services') && $request->services){
            $portfolio->whereHas('services', function($q) use($request) {$q->whereIn('slug',explode(',',$request->services));}); // like /portfolio?services=business,design
        }
        if($request->has('technologies') && $request->technologies){
            $portfolio->whereHas('technologies', function($q) use($request) {$q->whereIn('slug',explode(',',$request->technologies));}); // like /portfolio?technologies=sports-fitness,healthcare
        }
        if($request->has('industries') && $request->industries){
            $portfolio->whereHas('industries', function($q) use($request) {$q->whereIn('slug',explode(',',$request->industries));}); // like /portfolio?industries=sports,health
        }
        return $portfolio->orderBy('order')->paginate($request->per_page??10);
    }

    /**
     * @param CreatePortfolioRequest $request
     * @return Portfolio
     */
    public function createPortfolio(CreatePortfolioRequest $request): Portfolio
    {
        $portfolio = $this->create($request->except('picture', 'picture_meta_alt', 'picture_meta_title'));
        $portfolio->services()->sync($request->services);
        $portfolio->technologies()->sync($request->technologies);
        $portfolio->industries()->sync($request->industries);
        $portfolio->saveImageWithMeta($request->picture, $request->picture_meta_alt??'', $request->picture_meta_title??'');

        return $portfolio;
    }

    /**
     * @param $request
     * @return bool
     */
    public function updatePortfolio(UpdatePortfolioRequest $request): bool
    {
        $portfolio = $this->update($request->except('picture', 'picture_meta_alt', 'picture_meta_title'));
        if($request->has('picture')){
            $this->removeImage([$this->picture->path,$this->picture->thumbnail]);
            $this->saveImageWithMeta($request->picture, $request->picture_meta_alt??'', $request->picture_meta_title??'');
        }
        if ($request->has('picture_meta_alt') || $request->has('picture_meta_title')){
            $this->saveImageMeta($request->picture_meta_alt??'', $request->picture_meta_title??'');
        }
        if ($request->has('services')) {
            $this->services()->detach();
            $this->services()->sync($request->services);
        }
        if ($request->has('technologies')) {
            $this->technologies()->detach();
            $this->technologies()->sync($request->technologies);
        }
        if ($request->has('industries')) {
            $this->industries()->detach();
            $this->industries()->sync($request->industries);
        }

        return $portfolio;
    }

    public function deletePortfolio(){
        $this->removeImage([$this->picture->path,$this->picture->thumbnail]);
        $this->services()->detach();
        $this->technologies()->detach();
        $this->industries()->detach();
        return $this->forceDelete();
    }
}
