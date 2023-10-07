@extends('settings.index')
@section('title', 'Languages')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $items,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
