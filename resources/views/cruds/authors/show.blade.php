@extends('layouts.app', [
    'hasTitleHeader' => true,
    'hasDropdown' => true,
    'title' => $author->name,
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
                <img class="w-[500px] border border-gray-300" src="{{ getPicturePath($author->picture, 'author') }}"
                    onerror="this.onerror=null; this.src='{{ getDefaultUserPicturePath() }}'" />
            </div>

        </div>
    </div>
@endsection


{{-- Dropdown options --}}
@section('dropdown-options')
<div class="mt-[22px]">
    {{-- 3 dots icon --}}
    <p class="inline cursor-pointer text-[25px] py-[10px] px-[30px] dotsAutor hover:text-[#606FC7]">
        <i class="fas fa-ellipsis-v"></i>
    </p>
    <div
        class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-autor">
        <div
            class="absolute right-0 w-56 mt-[2px] mr-[10px] origin-top-right bg-white border
            border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none">
            <div class="py-1">

                {{-- Edit --}}
                <a href="{{ route('authors.edit', $author) }}"
                    class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                    role="menuitem">
                    <i class="fas fa-edit mr-[1px] ml-[5px] py-1"></i>
                    <span class="px-4 py-0">Edit author</span>
                </a>

                {{-- Delete --}}
                <form action="{{ route('authors.destroy', $author) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="flex w-full px-4 py-2 text-sm leading-5 text-left
                    text-gray-700 outline-none border-0 hover:text-red-500">
                        <i class="fas fa-trash mr-[5px] ml-[5px] py-1"></i>
                        <span class="px-4 py-0">Edit author</span>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
