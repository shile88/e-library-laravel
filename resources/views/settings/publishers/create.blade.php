@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New publisher',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Publishers', 'href' => route('publishers.index')],
        ['name' => 'New publisher', 'href' => route('publishers.create')],
    ],
])

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
