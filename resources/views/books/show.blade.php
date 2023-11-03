@extends('layouts.app')

{{-- @extends('layouts.app', [
    'hasHeaderTitle' => true,
    'title' => $book->title,
    'breadcrumbs' => [
        ['name' => 'Books', 'href' => route('books.index')],
        ['name' => $book->title, 'href' => route('books.show', $book)],
    ]
]) --}}
@section('title', $book->title)

@section('content')
    {{-- Heading --}}
    <div class="heading">
        <div class="flex justify-between border-b-[1px] border-[#e4dfdf]">
            {{-- Main title --}}
            <div class="pl-[30px] py-[10px] flex flex-col">
                {{-- Name --}}
                <h1>{{ $book->title }}</h1>

                {{-- Breadcrumbs --}}
                <div>
                    <nav class="w-full rounded">
                        <ol class="flex list-reset">
                            <li>
                                <a href="{{ route('books.index') }}" class="text-[#2196f3] hover:text-blue-600">
                                    Books
                                </a>
                            </li>
                            <li>
                                <span class="mx-2">/</span>
                            </li>
                            <li>
                                <a href="{{ route('books.show', $book) }}" class="text-[#2196f3] hover:text-blue-600">
                                    {{ $book->title }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>

            {{-- Links and dropdown --}}
            <div class="pt-[24px] mr-[30px]">
                <a href="#" class="inline hover:text-blue-600">
                    <i class="fas fa-level-up-alt mr-[3px]"></i>
                    Otpisi knjigu
                </a>
                <a href="#" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                    <i class="far fa-hand-scissors mr-[3px]"></i>
                    Izdaj knjigu
                </a>
                <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                    <i class="fas fa-redo-alt mr-[3px] "></i>
                    Vrati knjigu
                </a>
                <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                    <i class="far fa-calendar-check mr-[3px] "></i>
                    Rezervisi knjigu
                </a>
                <p
                    class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-[#e4dfdf] dotsKnjigaOsnovniDetalji hover:text-[#606FC7]">
                    <i class="fas fa-ellipsis-v"></i>
                </p>
                <div class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-knjiga-osnovni-detalji"
                    style="display: none;">
                    <div class="absolute right-0 w-56 mt-[7px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                        aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            <a href="{{ route('books.edit', $book) }}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Edit book</span>
                            </a>
                            <form action="{{ route('books.destroy', $book) }}" method="post">
                                @csrf
                                @method('delete')
                                <p tabindex="0"
                                    class="flex w-full px-4 text-sm leading-5 text-left
                                             text-gray-700 hover:text-red-500 z-50">
                                    <button type="submit" class="py-2 ml-[5px]" style="outline: none">
                                        <i class="fa fa-trash mr-[1px]"></i>
                                        <span class="px-4 py-0">Destroy book</span>
                                    </button>
                                </p>
                            </form>
                            {{-- <a href="#" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Destroy book</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Main content --}}
    <div class="pl-[30px] section- mt-[20px]">
        <div class="flex flex-row justify-between">
            {{-- First column --}}
            <div class="mr-[30px]">
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Title</span>
                    <p class="font-medium">{{ $book->title }}</p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Authors</span>
                    <p class="font-medium">
                        @foreach ($book->authors as $author)
                            <span>{{ $author->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Genres</span>
                    <p class="font-medium">
                        @foreach ($book->genres as $genre)
                            <span>{{ $genre->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Categories</span>
                    <p class="font-medium">
                        @foreach ($book->categories as $category)
                            <span>{{ $category->name }}</span><br>
                        @endforeach
                    </p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Publisher</span>
                    <p class="font-medium">{{ $book->publisher->name }}</p>
                </div>
                <div class="mt-[40px]">
                    <span class="text-gray-500 text-[14px]">Publish date</span>
                    <p class="font-medium">{{ $book->publish_date }}</p>
                </div>
            </div>

            {{-- Second column --}}
            <div class="mx-[30px]">
                <img src="{{ getBookPicturePath($book->picture) }}" alt="Book picture" width="500">
            </div>

            {{-- Third column --}}
            <div class="mr-[70px] mt-[20px] flex flex-col max-w-[600px]">
                <div>
                    <h4 class="text-gray-500 ">
                        Description
                    </h4>
                    <p class="addReadMore showlesscontent my-[10px]">{{ $book->description }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">ISBN</span>
                    <p class="font-medium">{{ $book->isbn }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Number of pages</span>
                    <p class="font-medium">{{ $book->page_count }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Number of copies</span>
                    <p class="font-medium">{{ $book->total_count }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Script</span>
                    <p class="font-medium">{{ $book->script->name }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Size</span>
                    <p class="font-medium">{{ $book->size->name }}</p>
                </div>
                <div class="mt-[20px]">
                    <span class="text-gray-500 text-[14px]">Binding</span>
                    <p class="font-medium">{{ $book->binding->name }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
