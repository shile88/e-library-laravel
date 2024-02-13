@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New category',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Categories', 'href' => route('categories.index')], ['name' => 'New category', 'href' => route('categories.create')]],
])

@section('content')
    @include('cruds.settings.partials.create_resource', [
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
        'hasDescription' => true,
        'hasIcon' => true,
    ])
@endsection
