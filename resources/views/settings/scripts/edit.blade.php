@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'Edit script')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $script,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])

@endsection
