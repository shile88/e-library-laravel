<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ isset($title) ? $title : 'Dashboard' }} | {{ config('app.name') }}</title>

    {{-- Styles and fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> 
    @include('partials.general.styles')
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    {{-- App Header --}}
    @include('partials.general.header')

    <main class="flex flex-row small:hidden">
        {{-- Sidebar --}}
        @include('partials.general.sidebar')

        <section class="w-screen h-screen pl-[83px] text-[#212121]">

            {{-- Title Header --}}
            @include('partials.custom.title-header')

            {{-- Main Content --}}
            @yield('content')

        </section>
    </main>

    {{-- Notification for small devices --}}
    @include('partials.general.inProgress')

    {{-- Scripts --}}
    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <!-- File upload -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/create-file-list"></script>

    {{-- Custom page cripts --}}
    @yield('page-scripts')
</body>

</html>
