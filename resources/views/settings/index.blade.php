@extends('layouts.app')

@section('content')

    {{-- Navbar --}}
    <div class="py-4 text-gray-500 border-b-[1px] border-[#e4dfdf] pl-[30px]">
        <a href="{{ route('global_variables.index') }}"
            class="inline hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'global') || str_contains(request()->route()->getName(), 'settings')) active-book-nav @endif">
            Global variables
        </a>
        <a href="{{ route('bindings.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'bindings')) active-book-nav @endif">
            Bindings
        </a>
        <a href="{{ route('categories.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'categories')) active-book-nav @endif">
            Categories
        </a>
        <a href="{{ route('genres.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'genres')) active-book-nav @endif">
            Genres
        </a>
        <a href="{{ route('languages.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'languages')) active-book-nav @endif">
            Languages
        </a>
        <a href="{{ route('publishers.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'publishers')) active-book-nav @endif">
            Publishers
        </a>
        <a href="{{ route('scripts.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'scripts')) active-book-nav @endif">
            Scripts
        </a>
        <a href="{{ route('sizes.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains(request()->route()->getName(), 'sizes')) active-book-nav @endif">
            Sizes
        </a>
    </div>

    {{-- Main settings content --}}
    @yield('main-settings')

@endsection
