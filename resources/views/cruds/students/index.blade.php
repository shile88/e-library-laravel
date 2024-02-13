@extends('layouts.app', [
    'hasTitleHeader' => true,
    'title' => 'Students',
    'breadcrumbs' => [
        [
            'name' => 'Students',
            'href' => route('users.index')
        ],
    ],
])

@section('content')

    @include('partials.custom.index_resource', [
        'items' => $items,
        'resourceName' => 'student',
        'resourcePlural' => 'users',
        'headers' => ['Name', 'Email', 'User role', 'JMBG'],
        'values' => ['email', 'role_id', 'jmbg'],
        'dropdowns' => ['Show details', 'Edit', 'Delete'],
        'functions' => ['.show', '.edit', '.destroy'],
        'icons' => ['far fa-file', 'fas fa-edit', 'fa fa-trash']
    ])

@endsection
