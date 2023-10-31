<?php

function getBookPicturePath($url)
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

function getUserPicturePath($url)
{
    if(empty($url)) {
        return App\Models\User::DEFAULT_USER_PICTURE_PATH;
    }

    // If url has "images" in it, it means that the picture is in different folder (in /public)
    if (str_contains($url, 'images')) {
        return $url;
    }

    return '/storage/' . $url;
}
