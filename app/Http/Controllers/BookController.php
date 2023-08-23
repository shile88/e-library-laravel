<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\Author;
use App\Models\Binding;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Script;
use App\Models\Size;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size')->get();
      
        return view('book.index', compact('books'));
    }

    public function create()
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size');
    
        return view('book.create', compact('book'));
    }


    public function store(StoreBookRequest $request)
{
    $validatedData = $request->validated();
    
    $book = Book::create($validatedData);
    
    $book->authors()->attach($validatedData['authors']); 
    $book->categories()->attach($validatedData['categories']);
    $book->genres()->attach($validatedData['genres_id']);
    
    return redirect()->route('book.index');

}

    
    public function show($id)
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size')->findOrFail($id);
        
        return view('book.show', compact('book'));
    }

    
    public function edit($id)
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size')->findOrFail($id);
    
        return view('book.edit', compact('book'));
    }

    
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validatedData = $request->validated();

        $book->update($validatedData);

        $book->authors()->sync($validatedData['authors']);
        $book->categories()->sync($validatedData['categories']);
        $book->genres()->sync($validatedData['genres']);

        return redirect()->route('books.index');
    }


    public function destroy(Book $book)
    {

        $book->authors()->detach();
        $book->categories()->detach();
        $book->genres()->detach();
        
        $book->delete();
        
        return redirect()->route('books.index');
    }
    
}