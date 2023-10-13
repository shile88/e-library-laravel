@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'Edit genre')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $genre,
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection
