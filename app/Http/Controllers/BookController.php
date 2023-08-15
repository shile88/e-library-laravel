<?php

namespace App\Http\Controllers;

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
      
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size');
    
        return view('books.create', compact('book'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'isbn' => 'required|unique:books,isbn',
        'description' => 'required|string',
        'page_count' => 'required|numeric',
        'total_count' => 'required|numeric',
        'year' => 'required|string',
        'language_id' => 'nullable|exists:languages,id',
        'genres_id' => 'nullable|array',
        'binding_id' => 'nullable|exists:bindings,id',
        'script_id' => 'nullable|exists:scripts,id',
        'size_id' => 'nullable|exists:sizes,id',
        'publisher_id' => 'nullable|exists:publishers,id',
        'authors.*' => 'nullable|exists:authors,id',
        'categories.*' => 'nullable|exists:categories,id',
    ]);
    
    try {
        $book = Book::create([
            'title' => $validatedData['title'],
            'isbn' => $validatedData['isbn'],
            'description' => $validatedData['description'],
            'page_count' => $validatedData['page_count'],
            'total_count' => $validatedData['total_count'],
        ]);
        
        $book->authors()->attach($validatedData['authors']); 
        $book->categories()->attach($validatedData['categories']);
        $book->genres()->attach($validatedData['genres']);
        
        return redirect()->route('books.index')
            ->with('success', 'Knjiga je uspešno dodata.');
    } catch (\Exception $e) {
        return redirect()->back()
            ->withInput()
            ->withErrors(['error' => 'Došlo je do greške prilikom dodavanja knjige.']);
    }
}

    
    public function show($id)
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size')->findOrFail($id);
        
        return view('books.show', compact('book'));
    }

    
    public function edit($id)
    {
        $book = Book::with('authors', 'bindings', 'categories', 'genre', 'languages', 'publishers', 'script', 'size')->findOrFail($id);
    
        return view('books.edit', compact('book'));
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn,' . $id,
            'description' => 'required|string',
            'page_count' => 'required|numeric',
            'total_count' => 'required|numeric',
            'year' => 'required|string',
            'language_id' => 'nullable|exists:languages,id',
            'genres_id' => 'nullable|array',
            'binding_id' => 'nullable|exists:bindings,id',
            'script_id' => 'nullable|exists:scripts,id',
            'size_id' => 'nullable|exists:sizes,id',
            'publisher_id' => 'nullable|exists:publishers,id',
            'authors.*' => 'nullable|exists:authors,id',
            'categories.*' => 'nullable|exists:categories,id',
        ]);

        try {
            $book = Book::findOrFail($id);

            $book->update([
                'title' => $validatedData['title'],
                'isbn' => $validatedData['isbn'],
                'description' => $validatedData['description'],
                'page_count' => $validatedData['page_count'],
                'total_count' => $validatedData['total_count'],
            ]);

            $book->authors()->sync($validatedData['authors']);
            $book->categories()->sync($validatedData['categories']);
            $book->genres()->sync($validatedData['genres']);

            return redirect()->route('books.index')
                ->with('success', 'Knjiga je uspešno ažurirana.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Došlo je do greške prilikom ažuriranja knjige.']);
        }
    }


    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
            
            $book->authors()->detach();
            $book->categories()->detach();
            $book->genres()->detach();
            
            $book->delete();
            
            return redirect()->route('books.index')
                ->with('success', 'Knjiga je uspešno obrisana.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Došlo je do greške prilikom brisanja knjige.']);
        }
    }
    
}