<?php

// Finds the right path for Book picture
function getBookPicturePath($url)
{
    if (empty($url)) {
        return getDefaultBookPicturePath();
    }

    // If url has "images" in it, it means that the picture is in different folder (in /public)
    if (str_contains($url, 'images')) {
        return $url;
    }

    return '/storage/' . $url;
}

// Finds the right path for User picture
function getUserPicturePath($url)
{
    if (empty($url)) {
        return getDefaultUserPicturePath();
    }

    // If url has "images" in it, it means that the picture is in different folder (in /public)
    if (str_contains($url, 'images')) {
        return $url;
    }

    return '/storage/' . $url;
}

// Returns path to default Book picture
function getDefaultBookPicturePath()
{
    return \App\Models\Book::DEFAULT_BOOK_PICTURE_PATH;
}

// Returns path to default User picture
function getDefaultUserPicturePath()
{
    return \App\Models\User::DEFAULT_USER_PICTURE_PATH;
}
