<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class FilterController extends Controller
{
    
    public function filterData( Request $request){
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
        
        $books = Book::where('title', 'LIKE', "%$searchTerm%")
        ->orWhere('description', 'LIKE', "%$searchTerm%")
        ->orWhere('isbn', 'LIKE', "%$searchTerm%")
        ->paginate(5);

        return view('search.search_result', compact('authors', 'books'));
    }
}
