<?php

namespace App\Traits;

trait PaginationTrait
{
    /**
     * After item delete calculates on what page to redirect.
     */
    function calculateRedirectPage($perPage, $total, $currentPage)
    {
        if ($total < $perPage)
            return 1;
        $numberOfElementsCurrentPage = $total - ($currentPage - 1) * $perPage;
        if ($numberOfElementsCurrentPage == 1)
            return $currentPage - 1;

        return $currentPage;
    }
}
