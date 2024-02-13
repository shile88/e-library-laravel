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
        'dropdowns' => ['Show details', 'Edit', 'Delete'],
        'functions' => ['.show', '.edit', '.destroy'],
        'icons' => ['far fa-file', 'fas fa-edit', 'fa fa-trash']
    ])

@endsection
