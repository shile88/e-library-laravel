@extends('layouts.app')
@section('title', 'Edit size')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $size,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
