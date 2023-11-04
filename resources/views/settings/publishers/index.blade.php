@extends('settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Publishers',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Publishers', 'href' => route('publishers.index')],
    ],
])

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
