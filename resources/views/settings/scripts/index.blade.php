@extends('settings.index')

@section('title', 'Sizes')

@section('main-settings')
    @include('settings.partials.table_with_add', ['items' => $scripts, 'resource' => 'scripts', 'resourceName' => 'Script'])
@endsection
