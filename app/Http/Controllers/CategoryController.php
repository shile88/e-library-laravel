<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Traits\PaginationTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Checks page and redirects
     */
    use PaginationTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get variables from the request and set default values if no value is set
        $orderBy = $request->get('orderBy') ?? 'name';
        $orderDir = $request->get('orderDir') ?? 'asc';
        $rowsPerPage = $request->get('rowsPerPage') ?? 7;

        // Order data by desired attribute and paginate
        $categories = Category::orderBy($orderBy, $orderDir)
            ->paginate($rowsPerPage);

        // Append $orderBy and $orderDir queries to the request
        $categories->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir, 'rowsPerPage' => $rowsPerPage]);

        return view('settings.categories.index', compact('categories', 'rowsPerPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Shows a page for creating a new category
        return view('settings.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // Stores new category in DB with the validated fields from StoreCategoryRequest
        Category::create($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // We do not use show method since there is not much to show (only a name)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // Shows a page for editing the category
        return view('settings.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // Updates category fields with the validated parameters from UpdateCategoryRequest
        $category->update($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, Request $request)
    {
        //Checks on what page to redirect
        $redirectPage = $this->calculateRedirectPage($request->perPage, $request->total, $request->currentPage);
        // Deletes category from the DB
        $category->delete();

        // After the operation is finished redirects to a different page
        return redirect()->route('categories.index',
                ['page' => $redirectPage,
                'rowsPerPage' => $request->perPage]);
    }
}