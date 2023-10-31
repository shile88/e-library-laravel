<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | {{ config('app.name') }}</title>
    {{-- TODO: Download scripts and styles locally --}}
    <!-- Styles and fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    @include('layouts.partials.styles')
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    @include('layouts.partials.header')

    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <section class="w-screen h-screen pl-[83px] text-[#212121]">

            {{-- Header Title --}}
            @include('settings.partials.header_title')

            <!-- Main Content -->
            @yield('content')

        </section>
    </main>

    <!-- Notification for small devices -->
    @include('layouts.partials.inProgress')

    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    {{-- Multiple select --}}
    <script src="https://unpkg.com/multiple-select@1.6.0/dist/multiple-select.min.js"></script>

    <!-- File upload -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/create-file-list"></script>

    @yield('page-scripts')
</body>

</html>
