@extends('settings.index')
@section('title', 'Publishers')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
