@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'New script')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])

@endsection
