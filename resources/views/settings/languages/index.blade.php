@extends('settings.index', [
    'hasTitleHeader' => true,
    'title' => 'Languages',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Languages', 'href' => route('languages.index')],
    ],
])

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
