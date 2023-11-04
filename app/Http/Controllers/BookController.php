<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Script;
use App\Models\Size;
use App\Models\Binding;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    protected $orderBy = 'title';

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Sort, filter and paginate data
        $books = $this->processIndexData($request, Book::query());

        return view('cruds.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        $genres = Genre::all();
        $languages = Language::all();
        $publishers = Publisher::all();
        $scripts = Script::all();
        $sizes = Size::all();
        $bindings = Binding::all();

        return view(
            'books.create',
            compact('authors', 'categories', 'genres', 'languages', 'publishers', 'scripts', 'sizes', 'bindings')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $inputs = $request->validated();

        if ($request['picture']) {
            $file = $request->file('picture');
            $photoPath = Storage::disk('public')->put('books', $file);
            $inputs['picture'] = $photoPath;
        } else {
            $photoPath = Author::DEFAULT_AUTHOR_PICTURE_PATH;
            $inputs['picture'] = $photoPath;
        }

        $book = Book::create($inputs);
        $book->authors()->attach($inputs['authors']);
        $book->categories()->attach($inputs['categories']);
        $book->genres()->attach($inputs['genres']);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('cruds.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        $genres = Genre::all();
        $languages = Language::all();
        $publishers = Publisher::all();
        $scripts = Script::all();
        $sizes = Size::all();
        $bindings = Binding::all();

        return view(
            'books.edit',
            compact('book', 'authors', 'categories', 'genres', 'languages', 'publishers', 'scripts', 'sizes', 'bindings')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back();
    }

    /**
     * Filters data for index page.
     */
    protected function filter($query, $searchTerm)
    {
        if (!empty($searchTerm)) {
            $query->where('title', 'LIKE', "%$searchTerm%");
            $query->orWhere('description', 'LIKE', "%$searchTerm%");
        }
    }
}
