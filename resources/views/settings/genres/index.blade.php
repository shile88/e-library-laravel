@extends('settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Genres',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Genres', 'href' => route('genres.index')],
    ],
])

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
