<?php

namespace App\Http\Controllers;

use App\Models\GlobalVariable;
use App\Http\Requests\StoreGlobalVariableRequest;
use App\Http\Requests\UpdateGlobalVariableRequest;
use Illuminate\Http\Request;

class GlobalVariableController extends Controller
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
        $globalVariables = GlobalVariable::orderBy($orderBy, $orderDir)
            ->paginate($rowsPerPage);

        // Append $orderBy and $orderDir queries to the request
        $globalVariables->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir]);

        // Shows appropriate page with selected data
        return view('settings.global_variables.index', compact('globalVariables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Shows a page for creating a new global variable
        return view('settings.global_variables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGlobalVariableRequest $request)
    {
        // Stores new global variable in DB with the validated fields from StoreRequest
        GlobalVariable::create($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('global_variables.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GlobalVariable $globalVariable)
    {
        // We do not use show method since there is not much to show (only a name)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GlobalVariable $globalVariable)
    {
        // Shows a page for editing the global variable
        return view('settings.global_variables.edit', compact('globalVariable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGlobalVariableRequest $request, GlobalVariable $globalVariable)
    {
        // Updates global variable fields with the validated data from UpdateRequest
        $globalVariable->update($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('global_variables.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GlobalVariable $globalVariable)
    {
        // Deletes global variable from the DB
        $globalVariable->delete();

        // After the operation is finished redirects back
        return redirect()->back();
    }
}
