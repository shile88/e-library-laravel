@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit - ' . $script->name,
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Scripts', 'href' => route('scripts.index')], ['name' => 'Edit - ' . $script->name, 'href' => route('scripts.edit', $script)]],
])

@section('content')
    @include('cruds.settings.partials.edit_resource', [
        'resource' => $script,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])
@endsection
