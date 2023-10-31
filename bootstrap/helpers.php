<?php

function getPicturePath(string $url): string
{
    // If url has "images" in it, it means that the picture is in different folder (in /public)
    if (str_contains($url, 'images')) {
        return $url;
    }

    return '/storage/' . $url;
}
