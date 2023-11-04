@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Edit - '. $language->name,
    'breadcrumbs' => [
        ['name' => 'Settings', 'href' => route('settings.index')],
        ['name' => 'Languages', 'href' => route('languages.index')],
        ['name' => 'Edit - '. $language->name, 'href' => route('languages.edit', $language)],
    ],
])

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $language,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
