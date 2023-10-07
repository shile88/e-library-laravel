<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScriptRequest;
use App\Http\Requests\UpdateScriptRequest;
use App\Models\Script;
use App\Traits\PaginationTrait;
use Illuminate\Http\Request;


class ScriptController extends BaseController
{
    /**
     * Checks page and redirects
     */
    use PaginationTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Order, filter and paginate data
        $items = $this->processIndexData($request, Script::query());

        return view('settings.scripts.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.scripts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScriptRequest $request)
    {
        Script::create($request->validated());
        return redirect()->route('scripts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Script $script)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Script $script)
    {
        return view('settings.scripts.edit', compact('script'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScriptRequest $request, Script $script)
    {
        $script->update($request->validated());
        return redirect()->route('scripts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Script $script, Request $request)
    {
        //Checks on what page to redirect
        $redirectPage = $this->calculateRedirectPage($request->perPage, $request->total, $request->currentPage);

        // Deletes genre from the DB
        $script->delete();

        // After the operation is finished redirects to a different page
           return redirect()->route('scripts.index',
               ['page' => $redirectPage,
               'rowsPerPage' => $request->perPage]);
    }
}
