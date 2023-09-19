@extends('settings.index')
@section('title', 'Sizes')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $sizes,
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
