@extends('cruds.settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Global variables',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Global variables', 'href' => route('global_variables.index')]],
])

@section('main-settings')
    @include('cruds.settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'global variable',
        'resourcePlural' => 'global_variables',
        'hasValue' => true,
        'hasDescription' => true,
    ])
@endsection
