@extends('layouts.app')
@section('title', 'New genre')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'genre',
        'resourcePlural' => 'genres',
    ])

@endsection