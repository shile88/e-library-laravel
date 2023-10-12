<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends BaseController
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        // Sort, filter and paginate data
        $authors = $this->processIndexData($request, Author::query());

        return view('authors.index', compact('authors'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $authorData = $request->validated();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $photoPath = Storage::disk('public')->put('authors', $file);
            $authorData['picture'] = $photoPath;
        } else {
            $photoPath = Author::DEFAULT_AUTHOR_PICTURE_PATH;
            $authorData['picture'] = $photoPath;
        }

        Author::create($authorData);

        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $authorData = $request->validated();

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $photoPath = Storage::disk('public')->put('authors', $file);
            $authorData['picture'] = $photoPath;
        }

        $author->update($authorData);

        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        // Delete author image
        Storage::disk('public')->delete($author->picture);

        //Delete row in pivot table
        $author->books()->detach();

        // Delete author
        $author->delete();

        // After the operation is finished redirects back
        return redirect()->back();
    }

    /**
     * Delete all selected rows
     */
    public function bulkDelete(Request $request)
    {
        // From string make array of IDs
        $selectedIds = explode(',', $request->input('selected_ids'));

        // Delete all authors with selected IDs
        Author::whereIn('id', $selectedIds)->delete();

        return redirect()->route('authors.index');
    }

    /**
     * Filters data for index page.
     */
    protected function filter($query, $searchTerm)
    {
        if (!empty($searchTerm)) {
            $query->where('name', 'LIKE', "%$searchTerm%");
            $query->orWhere('about', 'LIKE', "%$searchTerm%");
        }
    }

}
