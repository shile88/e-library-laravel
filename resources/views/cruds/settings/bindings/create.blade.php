@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New binding',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Bindings', 'href' => route('bindings.index')], ['name' => 'New binding', 'href' => route('bindings.create')]],
])

@section('content')
    @include('cruds.settings.partials.create_resource', [
        'resourceName' => 'binding',
        'resourcePlural' => 'bindings',
    ])
@endsection
