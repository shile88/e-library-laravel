@extends('layouts.app')
@section('title', 'Edit script')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $script,
        'resourceName' => 'script',
        'resourcePlural' => 'scripts',
    ])

@endsection
