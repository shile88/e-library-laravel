@extends('layouts.app')
<?php
$route_name = \Illuminate\Support\Facades\Route::currentRouteName();
?>
@section('content')
    <div class="py-4 text-gray-500 border-b-[1px] border-[#e4dfdf] pl-[30px]">
        <a href="{{ route('policy.index') }}"
            class="inline hover:text-blue-800 @if (str_contains($route_name, 'policy')) active-book-nav @endif">
            Policy
        </a>
        <a href="{{ route('categories.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'categories')) active-book-nav @endif">
            Categories
        </a>
        <a href="{{ route('policy.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'genres')) active-book-nav @endif">
            Genres
        </a>
        <a href="{{ route('policy.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'publishers')) active-book-nav @endif">
            Publishers
        </a>
        <a href="{{ route('policy.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'bindings')) active-book-nav @endif">
            Bindings
        </a>
        <a href="{{ route('policy.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'sizes')) active-book-nav @endif">
            Sizes
        </a>
        <a href="{{ route('policy.index') }}"
            class="inline ml-[70px] hover:text-blue-800 @if (str_contains($route_name, 'scripts')) active-book-nav @endif">
            Scripts
        </a>
    </div>

    <div class="height-ucenikProfile pb-[30px] mt-[20px]">
        @yield('main-settings')
    </div>
@endsection
