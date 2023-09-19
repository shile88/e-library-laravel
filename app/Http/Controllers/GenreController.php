<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get variables from the request and set default values if no value is set
        $orderBy = $request->get('orderBy') ?? 'name';
        $orderDir = $request->get('orderDir') ?? 'desc';
        $rowsPerPage = $request->get('rowPerPage') ?? 7;

        // Order data by desired attribute and paginate
        $genres = Genre::orderby($orderBy, $orderDir)
            ->paginate($rowsPerPage);

        // Append $orderBy and $orderDir queries to the request
        $genres->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir]);

        return view('settings.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Shows a page for creating a new genre
        return view('settings.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        // Stores new genre in DB with the validated fields from StoreGenreRequest
        Genre::create($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        // We do not use show method since there is not much to show (only a name)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        // Shows a page for editing the genre
        return view('settings.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        // Updates genre fields with the validated parameters from UpdateGenreRequest
        $genre->update($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('genres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        // Deletes genre from the DB
        $genre->delete();
        
        // After the operation is finished redirects to a different page
        return redirect()->route('genres.index');
    }
}
