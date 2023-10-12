@extends('settings.index')
@section('title', 'Languages')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
