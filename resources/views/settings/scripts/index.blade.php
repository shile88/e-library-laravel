@extends('settings.index')
@section('title', 'Scripts')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $items,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])

@endsection
