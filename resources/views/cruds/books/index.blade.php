@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Books',
    'breadcrumbs' => [
        [
            'name' => 'Books',
            'href' => route('books.index')
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
    ])

@endsection()
