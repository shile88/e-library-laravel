@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit - '. $genre->name,
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Genres', 'href' => route('genres.index')],
        ['name' => 'Edit - '. $genre->name, 'href' => route('genres.edit', $genre)],
    ],
])

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $genre,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
