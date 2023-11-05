<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use App\Models\Image;

trait Imageable{   

    public function saveImage(){
        return $this->morphOne(Image::class, 'imageable');
    }
    public function getImage()
    {
        return $this->morphOne(Image::class, 'imageable')
                    ->where('is_profile', true);
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable')->where('is_profile', false);
    }
}
