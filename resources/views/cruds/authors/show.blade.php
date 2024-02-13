@extends('layouts.app', [
    'hasTitleHeader' => true,
    'hasDropdown' => true,
    'title' => $author->name,
    'item' => $author,
    'resourceName' => 'author',
    'resourcePlural' => 'authors',

    'breadcrumbs' => [
        ['name' => 'Authors', 'href' => route('authors.index')],
        ['name' => $author->name, 'href' => route('authors.show', $author)],
    ],
])

@section('content')
    <div class="flex flex-row overflow-auto">
        <div class="grid grid-cols-2 mt-[20px] pl-[30px] w-[100%]">

            {{-- First column --}}
            <div class="row-1">
                {{-- Name --}}
                <div>
                    <span class="text-gray-500">Name</span>
                    <p class="font-medium">{{ $author->name }}</p>
                </div>

                {{-- About --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500">About</span>
                    <p class="font-medium max-w-[550px]">
                        {{ $author->about }}
                    </p>
                </div>
            </div>

            {{-- Second column --}}
            <div class="row-1">
                {{-- Picture --}}
                <img class="w-[500px] border border-gray-300" src="{{ getPicturePath($author->profilePicture, 'author') }}"
                    onerror="this.onerror=null; this.src='{{ getDefaultUserPicturePath() }}'" />
            </div>

        </div>
    </div>
@endsection
