@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'New language')

@section('content')

    @include('settings.partials.create_resource', [
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
