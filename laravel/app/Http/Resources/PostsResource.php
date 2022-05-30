<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    public function toArray($request)
    {
        $resource = $this->resource;

        return [
            'id' => $resource->id,
            'title' => $resource->title,
            'slug' => $resource->slug,
            'short_description' => $resource->short_description,
            'created_at' => $resource->created_at->format('d F Y'),
            'categories' => ArrayResource::collection($resource->categories),
            'industries' => ArrayResource::collection($resource->industries),
            'tags' => ArrayResource::collection($resource->tags),
            'picture' => PictureResource::make($resource->picture),
        ];
    }
}
