@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit - ' . $size->name,
    'breadcrumbs' => [['name' => 'Settings', 'href' => route('settings.index')], ['name' => 'Sizes', 'href' => route('sizes.index')], ['name' => 'Edit - ' . $size->name, 'href' => route('sizes.edit', $size)]],
])

@section('content')
    @include('cruds.settings.partials.edit_resource', [
        'resource' => $size,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])
@endsection
