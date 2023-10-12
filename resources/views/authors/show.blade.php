@extends('layouts.app')
@section('title', $author->name)
@section('content')
    <div class="heading">
        <div class="flex justify-between border-b-[1px] border-[#e4dfdf]">
            <div class="pl-[30px] py-[10px] flex flex-col">
                {{-- Name --}}
                <h1>{{ $author->name }}</h1>

                {{-- Breadcrumbs --}}
                <div>
                    <nav class="w-full rounded">
                        <ol class="flex list-reset">
                            <li>
                                <a href="{{ route('authors.index') }}" class="text-[#2196f3] hover:text-blue-600">
                                    Evidencija autora
                                </a>
                            </li>
                            <li>
                                <span class="mx-2">/</span>
                            </li>
                            <li>
                                <a href="{{ route('authors.show', $author) }}" class="text-[#2196f3] hover:text-blue-600">
                                    {{ $author->name }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            {{-- Options dropdown --}}
            <div class="pt-[24px] pr-[30px]">
                {{-- 3 dots icon --}}
                <p
                    class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-gray-300 dotsAutor hover:text-[#606FC7]">
                    <i class="fas fa-ellipsis-v"></i>
                </p>
                <div
                    class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-autor">
                    <div class="absolute right-0 w-56 mt-[2px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                        aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">

                            {{-- Edit --}}
                            <a href="{{ route('authors.edit', $author->id) }}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Izmijeni autora</span>
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; outline: none;"
                                    class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                    role="menuitem">
                                    <i class="fa fa-trash mr-[5px] ml-[5px] py-1"></i>
                                    <span class="px-4 py-0">Izbrisi autora</span>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Content --}}
    <div class="pl-[30px] height-profile pb-[30px] scroll">
        <div class="mr-[30px]">
            {{-- Name --}}
            <div class="mt-[20px]">
                <span class="text-gray-500">Ime i prezime</span>
                <p class="font-medium">{{ $author->name }}</p>
            </div>

            {{-- About --}}
            <div class="mt-[20px]">
                <span class="text-gray-500">Opis</span>
                <p class="font-medium max-w-[550px]">
                    {{ $author->about }}
                </p>
            </div>

            {{-- Picture --}}
            <img src="{{ getPicturePath($author->picture) }}" class="w-[500px] mt-[20px] border border-gray-300"
                onerror="this.onerror=null; this.src='{{ \App\Models\Author::DEFAULT_AUTHOR_PICTURE_PATH }}'">
        </div>
    </div>

@endsection('content')
