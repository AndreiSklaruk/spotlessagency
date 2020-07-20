<?php


namespace App\Listeners;

use Intervention\Image\Facades\Image;
use UniSharp\LaravelFilemanager\Events\ImageWasUploaded;

class ImageFileBrowserUploadListener
{
    public function handle($event)
    {
        $method = 'on'.class_basename($event);
        if (method_exists($this, $method)) {
            call_user_func([$this, $method], $event);
        }
    }

    public function onImageWasUploaded(ImageWasUploaded $event)
    {
        $path = $event->path();
        $image = Image::make($event->path());
        $imageWidth = $image->width();

        // todo refactor
        $imageTinyPath = str_replace('.jpg', '-150x150.jpg', $path);
        $imageSmallPath = str_replace('.jpg', '-200x200.jpg', $path);
        $imageMediumPath = str_replace('.jpg', '-768x512.jpg', $path);

        // 150x150
        // 200x200
        // 768x512
        if($imageWidth > 768) {
            $image->fit(768, 512);
        }
        $image->save($imageMediumPath);

        if($imageWidth > 200) {
            $image->fit(200, 200);
        }
        $image->save($imageSmallPath);

        if($imageWidth > 150) {
            $image->fit(150, 150);
        }
        $image->save($imageTinyPath);
    }
}
