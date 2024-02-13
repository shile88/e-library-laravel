<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

trait HasPagination
{
    /**
     * Processes data for index page for following resources binding, genre, categories, language, publisher, script, size.
     */
    public function processIndexData(Request $request, $query)
    {
        // Get values from request or set default ones
        $orderBy = $request->orderBy ?? $this->orderBy;
        $orderDir = $request->orderDir ?? $this->orderDirArray[0];
        $rowsPerPage = $request->rowsPerPage ?? $this->rowsPerPage;
        $searchTerm = $request->searchTerm;
        $page = $request->page;

        // Validate orderBy and orderDir
        $orderBy = ($orderBy == $this->orderBy) ? $orderBy : $this->orderBy;
        $orderDir = (in_array($orderDir, $this->orderDirArray)) ? $orderDir : $this->orderDirArray[0];

        // Order, filter and paginate data
        $this->order($query, $orderBy, $orderDir);

        $this->filter($query, $searchTerm);

        // Count number of total results
        $this->resultsCount = $query->count();

        // Paginate the data
        $paginator = $this->paginate($query, $rowsPerPage);

        // Append attributes to paginator
        $paginator->appends([
            'orderBy' => $orderBy,
            'orderDir' => $orderDir,
            'rowsPerPage' => $rowsPerPage,
            'searchTerm' => $searchTerm,
            'page' => $page,
        ]);

        return $paginator;
    }

    /**
     * Paginates data for index page.
     */
    protected function paginate($query, $rowsPerPage): LengthAwarePaginator
    {
        return $query->paginate($rowsPerPage);
    }

    /**
     * Orders data for index page.
     */
    protected function order($query, $orderBy, $orderDir)
    {
        $query->orderBy($orderBy, $orderDir);
    }

    /**
     * Filters data for index page only for one field - name.
     */
    protected function filter($query, $searchTerm)
    {
        if (!empty($searchTerm)) {
            $query->where('name', 'LIKE', "%$searchTerm%");
        }
    }
}
