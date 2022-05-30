<?php

namespace App\Services\Image;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use PHPUnit\Util\Filesystem;

class ImageProcessor
{
    /**
     * @var ImageConfiguration
     */
    protected $configuration;

    /**
     * @var ImageManager
     */
    protected $image;

    /**
     * @var Filesystem|FilesystemAdapter
     */
    protected $storage;

    public $errors_log = [];

    /**
     * ImageProcessorV2 constructor.
     * @param ImageConfiguration $configuration
     * @param ImageManager $image
     * @param FilesystemManager $fs
     */
    public function __construct(ImageConfiguration $configuration, ImageManager $image, FilesystemManager $fs)
    {
        $this->configuration = $configuration;
        $this->image = $image;
        $this->storage = $fs->disk('public');
    }

    protected function resize(string $source, string $destination)
    {
        return $this->image->make($source)
            ->fit($this->configuration->getThumbnailWidth(), $this->configuration->getThumbnailHeight())
            ->save($destination);
    }

    protected function resizeTo($source, $destination)
    {
        try {
            return $this->image->make($source)
                ->resize($this->configuration->getPictureWidth(), null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destination);
        } catch (\Exception $exception) {
            Log::debug($exception->getMessage());
            return false;
        }
    }

    /**
     * @param UploadedFile $file
     * @return array
     */
    public function saveImage(UploadedFile $file)
    {
        $pathInfo = $this->configuration->makePath($file->getPathname(), $file->guessExtension());
        $this->storage->makeDirectory($pathInfo['path']);
        $this->resizeTo($file->getPathname(), $this->storage->path($pathInfo['imagePath']));
        $this->resize($file->getPathname(), $this->storage->path($pathInfo['thumbnailPath']));

        return [
            'image' => $pathInfo['imagePath'],
            'thumbnail' => $pathInfo['thumbnailPath'],
        ];
    }

    public function deleteImage(string $path)
    {
        if (!$this->storage->delete($path)) {
            Log::error('picture not deleted: ' . $path);
            array_push($this->errors_log, 'picture not deleted:  ' . $path);
        }
    }

    public function deleteImageArray(array $path_array)
    {
        foreach ($path_array as $path) {
            $this->deleteImage($path);
        }
    }
}
