<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get a desirable order from the request - 'asc' OR 'desc'
        $order = $request->get('order');

        // Case 1: If desirable order is descending, show it in that order
        if ($order == 'desc') {
            $publishers = Publisher::orderBy('name', 'desc')
                ->paginate(8);
            $order = 'asc';
        }

        // Case 2: The order is either ascending or not specified in which case
        // we will show the default - ascending order
        else {
            $publishers = Publisher::orderby('name', 'asc')
                ->paginate(8);
            $order = 'desc';
        }

        // We also have to return the inverse order as a way of switching them
        return view('settings.publishers.index', compact('publishers', 'order'));
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
    public function destroy(Publisher $publisher)
    {
        // Deletes publisher from the DB
        $publisher->delete();
        // After the operation is finished redirects to a different page
        return redirect()->route('publishers.index');
    }
}
