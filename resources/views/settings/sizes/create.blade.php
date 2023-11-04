@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New size',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Sizes', 'href' => route('sizes.index')],
        ['name' => 'New size', 'href' => route('sizes.create')],
    ],
])

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
