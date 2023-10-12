@extends('settings.index')
@section('title', 'Scripts')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])

@endsection
