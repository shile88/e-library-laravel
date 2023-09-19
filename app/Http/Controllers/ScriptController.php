<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScriptRequest;
use App\Http\Requests\UpdateScriptRequest;
use App\Models\Script;
use Illuminate\Http\Request;


class ScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orderBy = $request->get('orderBy') ?? 'name';
        $orderDir = $request->get('orderDir') ?? 'asc';
        $rowPerPage = $request->get('rowPerPage') ?? 7;

        $scripts = Script::orderby($orderBy, $orderDir)
            ->paginate($rowPerPage);

        $scripts->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir]);

        return view('settings.scripts.index', compact('scripts'));
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
    public function destroy(Script $script)
    {
        $script->delete();
           return redirect()->route('scripts.index');
    }
}
