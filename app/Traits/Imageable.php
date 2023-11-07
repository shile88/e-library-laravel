<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use App\Models\Image;

trait Imageable{   

        

    public function profilePicture(){

        return $this->image()->where('is_profile', true);
    }   

    public function setProfilePicture($path, $request){
;

        //If we want to update profile picture, delete old picture from storage and delete relation
        //If profile picture exists delete relation and delete file from storage 
        if($this->image()->first()){
            Storage::disk('public')->delete($this->image()->first()->path);
            $this->image()->delete();
        }

        //Handle picture from request; Save picture and add relation
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $photoPath = Storage::disk('public')->put($path, $file);
            
            $this->image()->create([
                'path'=> $photoPath,
                'is_profile' => true
            ]);

            return true;
        }

        return false;
       
     }


}
