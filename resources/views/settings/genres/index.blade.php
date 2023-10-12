@extends('settings.index')
@section('title', 'Genres')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
