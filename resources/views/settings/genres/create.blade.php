@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New genre',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Genres', 'href' => route('genres.index')],
        ['name' => 'New genre', 'href' => route('genres.create')],
    ],
])

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
