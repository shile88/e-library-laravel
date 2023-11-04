@extends('layouts.app')
@section('title', 'Autori')
@section('content')
    @include('partials.custom.mainContentAndTable', [
           'items' => $items,
           'resourceName' => 'author',
           'resourcePlural' => 'authors',
           'headers' => [
               'Author name',
               'Description',
               ''],
           'values' => ['about'],
       ])

@endsection('content')
