<?php

function getPicturePath($url)
{
    if(empty($url)) {
        return App\Models\Book::DEFAULT_BOOK_PICTURE_PATH;
    }

    // If url has "images" in it, it means that the picture is in different folder (in /public)
    if (str_contains($url, 'images')) {
        return $url;
    }

    return '/storage/' . $url;
}
