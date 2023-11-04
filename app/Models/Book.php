<?php

namespace App\Models;

use App\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use Imageable;
    const DEFAULT_BOOK_PICTURE_PATH = '/storage/images/book.jpg';

    protected $guarded = ['id'];
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function script()
    {
        return $this->belongsTo(Script::class);
    }

    public function binding()
    {
        return $this->belongsTo(Binding::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

 
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }   
}
