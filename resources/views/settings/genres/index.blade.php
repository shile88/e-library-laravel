@extends('settings.index')
@section('title', 'Genres')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $genres,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
