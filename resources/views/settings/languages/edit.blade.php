@extends('layouts.app', [
    'hasHeaderTitle' => true,
])
@section('title', 'Edit language')

@section('content')

    @include('settings.partials.edit_resource', [
        'resource' => $language,
        'resourceName' => 'language',
        'resourcePlural' => 'languages',
    ])

@endsection
