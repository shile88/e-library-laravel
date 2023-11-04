@extends('settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Sizes',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Sizes', 'href' => route('sizes.index')],
    ],
])

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
