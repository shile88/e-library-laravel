@extends('layouts.app')
@section('title', 'New size')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'size',
        'resourcePlural' => 'sizes',
    ])

@endsection
