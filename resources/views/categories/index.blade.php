@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="row m-4">
        <a href="{{ route('categories.create') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New category</button>
        </a>
    </div>

    <div class="col col-3 m-4 ">

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Category</th>
                    <th class="border px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th class="border px-4 py-2">{{ $category->id }}</th>
                        <td class="border px-4 py-2">{{ $category->name }}</td>
                        <td class="border px-4 py-2 bg-yellow-400 hover:bg-yellow-300 rounded"><a
                                href="{{ route('categories.edit', $category) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
