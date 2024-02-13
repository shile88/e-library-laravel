@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit : ' . $publisher->name,
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Publishers', 'href' => route('publishers.index')], ['name' => 'Edit : ' . $publisher->name, 'href' => route('publishers.edit', $publisher)]],
])

@section('content')
    @include('cruds.settings.partials.edit_resource', [
        'resource' => $publisher,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])
@endsection
