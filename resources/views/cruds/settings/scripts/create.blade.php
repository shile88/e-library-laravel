@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New script',
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Scripts', 'href' => route('scripts.index')], ['name' => 'New script', 'href' => route('scripts.create')]],
])

@section('content')
    @include('cruds.settings.partials.create_resource', [
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])
@endsection
