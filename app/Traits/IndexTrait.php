<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait IndexTrait
{
    public function processIndexData(Request $request, $model)
    {
        // Get values from request or set default
        $orderBy = $request->orderBy ?? $this->orderBy;
        $orderDir = $request->orderDir ?? $this->orderDir;
        $rowsPerPage = $request->rowsPerPage ?? $this->rowsPerPage;
        $searchTerm = $request->searchTerm;
        $page = $request->page;

        // Order data
        $query = $model::orderBy($orderBy, $orderDir);

        // FIlter data
        $query->where('name', 'LIKE', "%$searchTerm%");

        // Paginate data
        $results = $query->paginate($rowsPerPage);

        // Append attributes to paginator
        $results->appends([
            'orderBy' => $orderBy,
            'orderDir' => $orderDir,
            'rowsPerPage' => $rowsPerPage,
            'searchTerm' => $searchTerm,
            'page' => $page,
        ]);

        return $results;
    }
}
