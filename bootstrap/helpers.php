<?php

function getPicturePath(string $url): string
{
    if (!str_contains($url, 'images')) {
        return '/storage/' . $url;
    }

    return $url;
}
