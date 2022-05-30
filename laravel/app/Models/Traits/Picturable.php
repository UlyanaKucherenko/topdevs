<?php

namespace App\Models\Traits;

use App\Models\Picture;
use App\Services\Image\ImageProcessor;
use Illuminate\Http\UploadedFile;
use phpDocumentor\Reflection\Types\This;

/**
 * Trait Picturable
 * @package App\Models\Traits
 */
trait Picturable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function pictures()
    {
        return $this->morphMany(Picture::class, 'picturable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function picture()
    {
        return $this->morphOne(Picture::class, 'picturable');
    }

    /**
     * @param UploadedFile $uploaded
     * @return mixed
     */
    public function saveImage(UploadedFile $uploaded)
    {
        $pathInfo = $this->getImageProcessor()->saveImage($uploaded);

        $picture = Picture::make([
            'name' => $uploaded->getClientOriginalName(),
            'path' => $pathInfo['image'],
            'thumbnail' => $pathInfo['thumbnail'],
        ]);

        $this->pictures()->save($picture);

        $this->setRelation('picture', $picture);

        return $picture;
    }

    public function saveImageWithMeta(UploadedFile $uploaded, string $meta_alt, string $meta_title)
    {
        if ($uploaded) {
            $this->saveImage($uploaded);
        }
        $this->picture()->update([
            'picture_meta_alt' => $meta_alt,
            'picture_meta_title' => $meta_title,
        ]);
    }

    public function saveImageMeta(string $meta_alt, string $meta_title)
    {
        $this->picture()->update([
            'picture_meta_alt' => $meta_alt,
            'picture_meta_title' => $meta_title,
        ]);
    }

    public function removeImage($path=null)
    {
        if ($this->picture) {
            if(is_array($path)){
                $this->getImageProcessor()->deleteImageArray($path);
            }
            $this->picture->delete();
            $this->unsetRelation('picture');
        }
    }

    /**
     * @return ImageProcessor
     */
    private function getImageProcessor()
    {
        return app(ImageProcessor::class);
    }
}
