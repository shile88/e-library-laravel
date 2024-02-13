@extends('cruds.settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Bindings',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Bindings', 'href' => route('bindings.index')]],
])

@section('main-settings')
    @include('cruds.settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'binding',
        'resourcePlural' => 'bindings',
    ])
@endsection
