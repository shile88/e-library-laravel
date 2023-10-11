@extends('settings.index')
@section('title', 'Publishers')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $items,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
