<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | {{ config('app.name') }}</title>

    {{-- Styles and fonts --}}
    @include('partials.general.styles')
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    {{-- Header --}}
    @include('partials.general.header')

    <main class="flex flex-row small:hidden">
        {{-- Sidebar --}}
        @include('partials.general.sidebar')

        <section class="w-screen h-screen pl-[83px] text-[#212121]">

            {{-- Header Title --}}
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
