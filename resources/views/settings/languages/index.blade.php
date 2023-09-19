@extends('settings.index')
@section('title', 'Languages')

@section('main-settings')

    @include('settings.partials.table_with_add', [
        'items' => $languages,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
