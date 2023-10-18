@extends('layouts.app')
@section('title', 'Autori')
@section('content')
    @include('layouts.partials.mainContentAndTable', [
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
