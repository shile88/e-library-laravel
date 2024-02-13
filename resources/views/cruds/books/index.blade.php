@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Books',
    'breadcrumbs' => [
        [
            'name' => 'Books',
            'href' => route('books.index'),
        ],
    ],
])

@section('content')

    @include('partials.custom.index_resource', [
        'items' => $items,
        'resourceName' => 'book',
        'resourcePlural' => 'books',
        'headers' => ['Title' ,'Authors' ,'Categories' ,'Reserved' ,'Checked out', 'Overdue' ,'Available' ,'Total'],
        'pivots' => ['authors', 'categories'],
        'values' => ['#', '#', '#', '#', 'total_count'],
        'dropdowns' => (auth()->user()->role_id === 3) ?
                      ['Show details', 'Return', 'Reserve'] :
                      ['Show', 'Edit', 'Write off', 'Rent', 'Return', 'Reserve', 'Delete'],
        'functions' => (auth()->user()->role_id === 3) ?
                      ['.show', '.show', '.show'] :
                      ['.show', '.show', '.show', '.show', '.show', '.show', '.destroy'],
        'icons' => (auth()->user()->role_id === 3) ?
                      ['far fa-file', 'fas fa-redo-alt', 'far fa-calendar-check'] :
                      ['far fa-file', 'fas fa-edit', 'fas fa-level-up-alt', 'far fa-hand-scissors', 'fas fa-redo-alt', 'far fa-calendar-check', 'fa fa-trash'],
    ])

@endsection
