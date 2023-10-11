<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;


class SizeController extends BaseController
{ /**
  * Display a listing of the resource.
  */
    public function index(Request $request)
    {
        // Order, filter and paginate data
        $items = $this->processIndexData($request, Size::query());

        return view('settings.sizes.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.sizes.create');
    }


    public function show()
    {
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        Size::create($request->validated());
        return redirect()->route('sizes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('settings.sizes.edit', compact('size'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Size $size)
    {
        $size->update($request->validated());
        return redirect()->route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size, Request $request)
    {
        //Checks on what page to redirect
        $redirectPage = $this->calculateRedirectPage($request->perPage, $request->total, $request->currentPage);

        // Deletes genre from the DB
        $size->delete();

        // After the operation is finished redirects to a different page
        return redirect()->route(
            'sizes.index',
            [
                'page' => $redirectPage,
                'rowsPerPage' => $request->perPage
            ]
        );
    }
}