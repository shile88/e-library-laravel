@extends('layouts.app')

@section('title', 'Books')

@section('content')
    @include('layouts.partials.mainContentAndTable', [
              'items' => $items,
              'resourceName' => 'book',
              'resourcePlural' => 'books',
              'headers' => [
                  'Book name',
                  'Author',
                  'Category',
                  'Available',
                  'Reserved',
                  'Rented',
                  'Over limit',
                  'Total number',
                  ''],
              'values' => ['x', 'x1', 'x2', 'x3', 'x4'],
              'pivots' => ['authors', 'categories']
          ])

@endsection('content')
