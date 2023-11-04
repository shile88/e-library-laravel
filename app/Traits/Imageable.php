<?php
namespace App\Traits;

use App\Models\Image;

trait Imageable{
    public function defaultImage(){
        return $this->DEFAULT_AUTHOR_PICTURE_PATH;
    }


    public function profileImage()
    {
        return $this->morphOne(Image::class, 'imageable')
                    ->where('is_profile', true)
                    ->withDefault([
                        'path' => $this->defaultImage(),
                    ]);
    }
}
