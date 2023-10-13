@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'New binding')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'binding',
        'resourcePlural' => 'bindings',
    ])

@endsection
