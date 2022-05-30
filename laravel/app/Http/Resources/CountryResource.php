<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $resource = $this->resource;

        return [
            'name'      => $resource->name,
            'dial_code' => '+' . $resource->dial_code,
            'picture'   => PictureResource::make($resource->picture),
        ];
    }
}
