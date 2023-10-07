<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

trait HasPagination
{
    public function processIndexData(Request $request, $query)
    {
        // Get values from request or set default
        $searchTerm = $request->searchTerm;
        $rowsPerPage = $request->rowsPerPage ?? $this->rowsPerPage;
        $orderBy = $request->orderBy ?? $this->orderBy;
        $orderDir = $request->orderDir ?? $this->orderDir;
        $page = $request->page;

        // Order, filter and paginate data
        // TODO: Ovdje se javlja greska `Call to a member function orderBy() on string`
        $this->orderBy($query, $orderBy, $orderDir);

        $this->filter($query, $searchTerm);
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

    protected function paginate($query, $rowsPerPage): LengthAwarePaginator
    {
        return $query->paginate($rowsPerPage);
    }

    protected function orderBy($query, $orderBy, $orderDir)
    {
        $query->orderBy($orderBy, $orderDir);
    }

    protected function filter($query, $searchTerm)
    {
        if (!empty($searchTerm)){
            $query->where('name', 'LIKE', "%$searchTerm%");
        }
    }
}
