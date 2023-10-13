@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'Edit publisher')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $publisher,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
