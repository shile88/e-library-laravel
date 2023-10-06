<?php

namespace App\Http\Controllers;

use App\Traits\IndexTrait;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    use IndexTrait;

    protected $orderBy = 'name';
    protected $orderDir = 'asc';
    protected $rowsPerPage = 7;
}
