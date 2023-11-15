<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ isset($title) ? $title : 'Dashboard' }} | {{ config('app.name') }}</title>

    {{-- Styles and fonts --}}
    @include('partials.general.styles')
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    {{-- App Header --}}
    @include('partials.general.header')

    <main class="flex flex-row small:hidden">
        {{-- Sidebar --}}
        @include('partials.general.sidebar')

        <section class="w-screen h-screen pl-[83px] scroll pb-[80px] text-[#212121]">

            {{-- Title Header --}}
            @include('partials.custom.title-header')

            {{-- Main Content --}}
            @yield('content')

        </section>
    </main>

    {{-- Notification for small devices --}}
    @include('partials.general.inProgress')

    {{-- Scripts --}}
    @include('partials.general.scripts')

    {{-- Custom page cripts --}}
    @yield('page-scripts')
</body>

</html>
