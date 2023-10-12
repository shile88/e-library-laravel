@extends('layouts.app')
@section('title', 'Edit category')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $category,
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
        'hasDescription' => true
    ])

@endsection
