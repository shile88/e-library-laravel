@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'Edit size')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $size,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
