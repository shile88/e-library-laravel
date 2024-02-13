@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit : ' . $binding->name,
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Bindings', 'href' => route('bindings.index')], ['name' => 'Edit : ' . $binding->name, 'href' => route('bindings.edit', $binding)]],
])

@section('content')
    @include('cruds.settings.partials.edit_resource', [
        'resource' => $binding,
        'resourceName' => 'binding',
        'resourcePlural' => 'bindings',
    ])
@endsection
