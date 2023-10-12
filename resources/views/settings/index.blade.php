@extends('layouts.app')
<?php
$route_name = \Illuminate\Support\Facades\Route::currentRouteName();
?>
@section('content')
    {{-- Header --}}
    <div class="heading border-b-[1px] border-[#e4dfdf]">
        <div class="pl-[30px] mt-[22px] mb-[23px]">
            <h1>@yield('title')</h1>
        </div>
    </div>

    {{-- Navbar --}}
    <div class="py-4 text-gray-500 border-b-[1px] border-[#e4dfdf] pl-[30px]">
        <a href="{{ route('global_variables.index') }}"
            class="inline hover:text-blue-800 @if (str_contains($route_name, 'global') || str_contains($route_name, 'settings')) active-book-nav @endif">
            Global variables
        </a>
        <a href="{{ route('bindings.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'bindings')) active-book-nav @endif">
            Bindings
        </a>
        <a href="{{ route('categories.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'categories')) active-book-nav @endif">
            Categories
        </a>
        <a href="{{ route('genres.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'genres')) active-book-nav @endif">
            Genres
        </a>
        <a href="{{ route('languages.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'languages')) active-book-nav @endif">
            Languages
        </a>
        <a href="{{ route('publishers.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'publishers')) active-book-nav @endif">
            Publishers
        </a>
        <a href="{{ route('scripts.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'scripts')) active-book-nav @endif">
            Scripts
        </a>
        <a href="{{ route('sizes.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'sizes')) active-book-nav @endif">
            Sizes
        </a>
    </div>

    {{-- Main settings content --}}
    <div class="height-ucenikProfile scroll pb-[30px]">
        @yield('main-settings')
    </div>
@endsection
