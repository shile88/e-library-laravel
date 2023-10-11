@extends('settings.index')
@section('title', 'Genres')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $items,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
