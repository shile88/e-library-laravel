<?php

namespace App\Http\Controllers;

use App\Traits\HasPagination;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    use HasPagination;

    protected $orderBy = 'name';
    protected $orderDir = 'asc';
    protected $rowsPerPage = 7;
}
