@extends('layouts.app')
@section('title', 'New category')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
        'hasDescription' => true
    ])

@endsection
