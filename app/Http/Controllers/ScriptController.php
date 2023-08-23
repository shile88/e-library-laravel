<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScriptRequest;
use App\Http\Requests\UpdateScriptRequest;
use App\Models\Script;

class ScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('script.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScriptRequest $request)
    {
        Script::query()->create($request->validated());

        return redirect()->route('settings.scripts');
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
        return view('script.edit', ['script' => $script]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScriptRequest $request, Script $script)
    {
        $script->update($request->validated());

        return redirect()->route('settings.scripts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Script $script)
    {
        $script->delete();

        return redirect()->route('settings.scripts');
    }
}
