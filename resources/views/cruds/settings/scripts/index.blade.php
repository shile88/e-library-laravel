@extends('cruds.settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Scripts',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Scripts', 'href' => route('scripts.index')]],
])

@section('main-settings')
    @include('cruds.settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])
@endsection
