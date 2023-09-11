<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use GuzzleHttp\Psr7\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::paginate(5);
        return view('author.index', compact('authors'));
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
        }
        
        Author::create($authorData);

        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        $authorName = $author->name;
        return view('author.show', compact('author', 'authorName'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        $authorName = $author->name;
        return view('author.edit', compact('author', 'authorName'));
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
        // Delete image of author only if it isn't default image 
        if (!Str::contains($author->picture, 'default.jpg')) {
            Storage::disk('public')->delete($author->picture);
        }

        //Delete row in pivot table
        $author->books()->detach();
        $author->delete();

        return redirect()->route('authors.index');

    }

}
