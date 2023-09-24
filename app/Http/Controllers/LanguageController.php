<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
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
        $languages = Language::orderby($orderBy, $orderDir)
            ->paginate($rowsPerPage);

        // Append $orderBy and $orderDir queries to the request
        $languages->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir]);

        return view('settings.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Shows a page for creating a new language
        return view('settings.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLanguageRequest $request)
    {
        // Stores new language in DB with the validated fields from StoreLanguageRequest
        Language::create($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        // We do not use show method since there is not much to show (only a name)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        // Shows a page for editing the language
        return view('settings.languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        // Updates language fields with the validated parameters from UpdateLanguageRequest
        $language->update($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        // Deletes language from the DB
        $language->delete();

        // After the operation is finished redirects to a different page
        return redirect()->route('languages.index');
    }
}