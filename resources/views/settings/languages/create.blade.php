@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'New language',
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Languages', 'href' => route('languages.index')],
        ['name' => 'New language', 'href' => route('languages.create')],
    ],
])

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
