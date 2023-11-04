<?php

// Finds the right path for Book picture
function getPicturePath($url, $model = 'book')
{
    if (empty($url)) {
        if ($model == 'author' || $model == 'user')
            return getDefaultUserPicturePath();

        return getDefaultBookPicturePath();
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
