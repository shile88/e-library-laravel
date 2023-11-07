<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use App\Models\Image;

trait Imageable{   

        

    public function profilePicture(){

        return $this->morphOne(Image::class, 'imageable');
    }   

    public function setProfilePicture($image){
       $image->is_profile = true;
       $image->save();
     }


}
