@extends('settings.index')
@section('title', 'Publishers')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $publishers,
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
