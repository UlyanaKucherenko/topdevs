<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
{
    public function toArray($request)
    {
        $resource = $this->resource;

        return [
            'id' => $resource->id,
            'title' => $resource->title,
            'slug' => $resource->slug,
            'description' => $resource->description,
            'short_description' => $resource->short_description,
            'banner_text' => $resource->banner_text,
            'is_active_banner' => $resource->is_active_banner,
            'created_at' => $resource->created_at->format('d F Y'),
            'categories' => ArrayResource::collection($resource->categories),
            'industries' => ArrayResource::collection($resource->industries),
            'tags' => ArrayResource::collection($resource->tags),
            'picture' => PictureResource::make($resource->picture),
        ];
    }
}
