<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait Imageable
{
    /**
     * Save profile picture in storage and create relation to model.
     */
    public function saveProfilePicture($model, $request)
    {
        if ($request->hasFile('picture')) {
            // Get picture from the request
            $file = $request->file('picture');

            // Model is folder where the image will be saved (eg. books, authors, users)
            $path = Storage::disk('public')->put($model, $file);

            // Create relation to model
            $this->images()->create([
                'path' => $path,
                'is_profile' => true
            ]);
        }
    }

    public function saveAndSetProfilePicture($path, $request)
    {
        //If we want to update profile picture, delete old picture from storage and delete relation
        //If profile picture exists delete relation and delete file from storage
        if ($this->images()->first()) {
            Storage::disk('public')->delete($this->images()->first()->path);
            $this->images()->delete();
        }

        //Handle picture from request; Save picture into storage and add relation
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $photoPath = Storage::disk('public')->put($path, $file);

            $this->images()->create([
                'path' => $photoPath,
                'is_profile' => true
            ]);

            return true;
        }

        return false;

    }

    public function savePicturesAndSetProfilePicture($path, $inputs)
    {
        // If profile picture exists delete relation and delete picture from storage
        if ($this->images()->where('is_profile', true)->first()) {
            Storage::disk('public')->delete($this->images()->where('is_profile', true)->first()->path);
            $this->images()->delete();
        }

        //Handle picture from request; Save picture into storage and add relation
        if ($inputs['pictures']) {

            foreach ($inputs['pictures'] as $key => $picture) {
                $photoPath = Storage::disk('public')->put($path, $picture);

                // Check if image is profile image
                $isProfile = ($key == $inputs['chosen_image']);

                $this->images()->create([
                    'path' => $photoPath,
                    'is_profile' => $isProfile
                ]);
            }

            return true;
        }

        return false;

    }

}
