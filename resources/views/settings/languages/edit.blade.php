@extends('layouts.app')
@section('title', 'Edit language')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $language,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
