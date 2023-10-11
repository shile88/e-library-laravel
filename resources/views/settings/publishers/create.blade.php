@extends('layouts.app')
@section('title', 'New publisher')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'publisher',
        'resourcePlural' => 'publishers',
    ])

@endsection
