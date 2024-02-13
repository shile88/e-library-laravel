@extends('layouts.app', [
    'hasTitleHeader' => true,
    'hasDropdown' => true,
    'title' => $book->title,
    'item' => $book,
    'resourceName' => 'book',
    'resourcePlural' => 'books',

    'breadcrumbs' => [
        ['name' => 'Books', 'href' => route('books.index')],
        ['name' => $book->title, 'href' => route('books.show', $book)],
    ],

    'headerLinks' => [
        ['label' => 'Check out', 'href' => route('books.index'), 'icon' => 'far fa-hand-scissors'],
        ['label' => 'Check in', 'href' => route('books.index'), 'icon' => 'fas fa-level-up-alt'],
        ['label' => 'Reserve', 'href' => route('books.index'), 'icon' => 'fas fa-redo-alt'],
    ],
])

@section('content')
<div class="border-b-[1px] border-[#e4dfdf] py-4 text-gray-500 pl-[30px]">
<a href="{{ route('books.show', $book->id) }}" class="inline active-book-nav hover:text-blue-800">
        Specifikacije
    </a>
    <a href="{{ route('books.showMultimedia', $book->id) }}" class="inline ml-[70px]  hover:text-blue-800">
        Multimedija
    </a>
</div>
    <div class="pl-[30px] mt-[20px]">
   
        <div class="flex flex-row justify-between">

            {{-- First column --}}
            <div class="mr-[30px]">

                {{-- Title --}}
                <div class="">
                    <span class="text-gray-500 text-[14px]">Title</span>
                    <p class="font-medium">{{ $book->title }}</p>
                </div>

                {{-- Authors --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Authors</span>
                    <p class="font-medium">
                        @foreach ($book->authors as $author)
                            <span>{{ $author->name }}</span><br>
                        @endforeach
                    </p>
                </div>

                {{-- Genres --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Genres</span>
                    <p class="font-medium">
                        @foreach ($book->genres as $genre)
                            <span>{{ $genre->name }}</span><br>
                        @endforeach
                    </p>
                </div>

                {{-- Categories --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Categories</span>
                    <p class="font-medium">
                        @foreach ($book->categories as $category)
                            <span>{{ $category->name }}</span><br>
                        @endforeach
                    </p>
                </div>

                {{-- Publisher --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Publisher</span>
                    <p class="font-medium">{{ $book->publisher->name }}</p>
                </div>

                {{-- Publish date --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Publish date</span>
                    <p class="font-medium">{{ $book->publish_date }}</p>
                </div>
            </div>

            {{-- Second column --}}
            <div class="">

                {{-- Picture --}}
                <img src="{{ getPicturePath($book->profilePicture) }}" alt="Book picture" width="500"
                    onerror="this.onerror=null; this.src='{{ getDefaultBookPicturePath() }}'" />
            </div>

            {{-- Third column --}}
            <div class="mr-[15px] max-w-[600px]">

                {{-- Description --}}
                <div>
                    <h4 class="text-gray-500 ">
                        Description
                    </h4>
                    <p class="addReadMore showlesscontent my-[10px]">{{ $book->description }}</p>
                </div>

                {{-- ISBN --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">ISBN</span>
                    <p class="font-medium">{{ $book->isbn }}</p>
                </div>

                {{-- Number of pages --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Number of pages</span>
                    <p class="font-medium">{{ $book->page_count }}</p>
                </div>

                {{-- Number of copies --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Number of copies</span>
                    <p class="font-medium">{{ $book->total_count }}</p>
                </div>

                {{-- Script --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Script</span>
                    <p class="font-medium">{{ $book->script->name }}</p>
                </div>

                {{-- Size --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Size</span>
                    <p class="font-medium">{{ $book->size->name }}</p>
                </div>

                {{-- Binding --}}
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Binding</span>
                    <p class="font-medium">{{ $book->binding->name }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
