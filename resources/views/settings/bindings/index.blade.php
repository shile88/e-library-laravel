@extends('settings.index')
@section('title', 'Bindings')

@section('main-settings')

    @include('settings.partials.index_resource', [
        'items' => $items,
        'resourceName' => 'binding',
        'resourcePlural' => 'bindings',
    ])

@endsection
