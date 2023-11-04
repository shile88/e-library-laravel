@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit - '. $category->name,
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Categories', 'href' => route('categories.index')],
        ['name' => 'Edit - '. $category->name, 'href' => route('categories.edit', $category)],
    ],
])

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $category,
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
        'hasDescription' => true,
    ])

@endsection
