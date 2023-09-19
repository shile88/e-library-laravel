@extends('settings.index')

@section('title', 'Bindings')

@section('main-settings')
    @include('settings.partials.table_with_add', ['items' => $bindings, 'resource' => 'bindings', 'resourceName' => 'binding'])
@endsection
