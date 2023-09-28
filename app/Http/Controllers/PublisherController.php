<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Models\Publisher;
use App\Traits\PaginationTrait;
use Illuminate\Http\Request;

class PublisherController extends Controller
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
        // Get variables from the request and set default values if no value is set
        $orderBy = $request->get('orderBy') ?? 'name';
        $orderDir = $request->get('orderDir') ?? 'asc';
        $rowsPerPage = $request->get('rowsPerPage') ?? 7;

        // Order data by desired attribute and paginate
        $publishers = Publisher::orderby($orderBy, $orderDir)
            ->paginate($rowsPerPage);

        // Append $orderBy and $orderDir queries to the request
        $publishers->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir, 'rowsPerPage' => $rowsPerPage]);

        return view('settings.publishers.index', compact('publishers', 'rowsPerPage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Shows a page for creating a new publisher
        return view('settings.publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublisherRequest $request)
    {
        // Stores new publisher in DB with the validated fields from StorePublisherRequest
        Publisher::create($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('publishers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        // We do not use show method since there is not much to show (only a name)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        // Shows a page for editing the publisher
        return view('settings.publishers.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        // Updates publisher fields with the validated parameters from UpdatePublisherRequest
        $publisher->update($request->validated());

        // After the operation is finished redirects to a different page
        return redirect()->route('publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher, Request $request)
    {
        //Checks on what page to redirect
        $redirectPage = $this->calculateRedirectPage($request->perPage, $request->total, $request->currentPage);

        // Deletes publisher from the DB
        $publisher->delete();

        // After the operation is finished redirects to a different page
        return redirect()->route('publishers.index',
                ['page' => $redirectPage,
                'rowsPerPage' => $request->perPage]);
    }
}
