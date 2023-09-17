<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
{   
    // Number of rows for displaying on one page
    $rowsPerPage = $request->rowsPerPage ?? 7;
    
    // Column for search
    $orderBy = $request->orderBy ?? 'name';
    
    // Direction for sort
    $order = $request->order ?? 'asc';
    
    // Search param for filtering
    $searchTerm = $request->input('q');

    // If search existis
    if (!empty($searchTerm) && strlen($searchTerm) >= 3) {
        $authors = Author::where('name', 'LIKE', $searchTerm .'%') // If it starts with a search param
            ->orderBy($orderBy , $order)
            ->paginate($rowsPerPage );
    } else {
        // If no search, only sort
        $authors = Author::orderBy($orderBy, $order)
            ->paginate($rowsPerPage );       
    }
    
    // Appends parameters to request
    $authors->appends(['order' => $order, 'q' => $searchTerm, 'orderBy' => $orderBy, 'rowsPerPage' => $rowsPerPage]);
 
    // Toggle value of sorting order
    $order = ($order == 'desc') ? 'asc' : 'desc';
   
    return view('author.index', compact('authors', 'order', 'orderBy'));
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
        }else{
            $photoPath =  'authors/default.jpg';
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

    public function bulkDelete(Request $request){
        $selectedIds = explode(',', $request->input('selected_ids'));
        Author::whereIn('id', $selectedIds)->delete();

        return redirect()->route('authors.index');
    }

    
    public function filterData(Request $request){
        $request->validate([
            'q' => 'required|string|max:50',
        ]);
    
        $searchTerm = $request->input('q');
        
        if(strlen($searchTerm)<3){
            return redirect()->back();
        }

        $authors = Author::where('name', 'LIKE', "%$searchTerm%")
        ->orWhere('about', 'LIKE', "%$searchTerm%")
        ->paginate(5);
        
        
        return redirect()->route('authors.index', ['authors'=>$authors]);
    }
    
}
