<?php

namespace App\Models;

use App\Models\Traits\Picturable;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use Picturable;

    /**
     * @param $request
     * @return Media
     */
    function createMedia($request): Media
    {
        $media = $this->create();
        $media->saveImageWithMeta($request->picture, $request->picture_meta_alt??'', $request->picture_meta_title??'');

        return $media;
    }

    function removeMedia(): ?bool
    {
        $this->removeImage([$this->picture->path,$this->picture->thumbnail]);
        return $this->delete();
    }
}
