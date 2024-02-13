@extends('cruds.settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Categories',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Categories', 'href' => route('categories.index')]],
])

@section('main-settings')
    @include('cruds.settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'category',
        'resourcePlural' => 'categories',
        'hasDescription' => true,
    ])
@endsection
