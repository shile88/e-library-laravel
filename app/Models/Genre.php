<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Returns all the books associated with this category (in the table book_category)
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
