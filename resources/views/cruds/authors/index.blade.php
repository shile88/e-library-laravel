@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Authors',
    'breadcrumbs' => [
        [
            'name' => 'Authors',
            'href' => route('authors.index')
        ],
    ],
])

@section('content')

    @include('partials.custom.index_resource', [
        'items' => $items,
        'resourceName' => 'author',
        'resourcePlural' => 'authors',
        'headers' => ['Name', 'About'],
        'values' => ['about'],
    ])

@endsection
