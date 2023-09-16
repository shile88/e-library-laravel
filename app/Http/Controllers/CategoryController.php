<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get a desirable order from the request - 'asc' OR 'desc'
        $order = $request->get('order');

        // Case 1: If desirable order is descending, show it in that order
        if ($order == 'desc') {
            $categories = Category::orderBy('name', 'desc')
                ->orderBy('description', 'desc')
                ->paginate(8);
            $order = 'asc';
        }

        // Case 2: The order is either ascending or not specified in which case
        // we will show the default - ascending order
        else {
            $categories = Category::orderby('name', 'asc')
                ->orderBy('description', 'asc')
                ->paginate(8);
            $order = 'desc';
        }

        // We also have to return the inverse order as a way of switching them
        return view('settings.categories.index', compact('categories', 'order'));
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
    public function destroy(Category $category)
    {
        // Deletes category from the DB
        $category->delete();
        // After the operation is finished redirects to a different page
        return redirect()->route('categories.index');
    }
}
