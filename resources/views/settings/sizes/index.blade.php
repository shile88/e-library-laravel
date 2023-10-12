@extends('settings.index')
@section('title', 'Sizes')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
