@extends('settings.index')
@section('title', 'Categories')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $categories,
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
    ])

@endsection
