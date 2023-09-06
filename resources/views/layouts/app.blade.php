<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | {{ config('app.name') }}</title>

    <!-- Styles and fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    @include('layouts.partials.styles')
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    @include('layouts.partials.header')

    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <section class="w-screen h-screen pl-[83px] text-[#212121]">
            <!-- Heading of Content -->
            <div class="heading border-b-[1px] mb-[20px] border-[#e4dfdf] mt-4">
                <div class="pl-[30px] mb-4">
                    <h1>@yield('title', 'Dashboard')</h1>
                </div>
            </div>

            <!-- Main Content -->
            @yield('content')

        </section>
    </main>

    <!-- Notification for small devices -->
    @include('layouts.partials.inProgress')

    <!-- Scripts -->
    @vite('resources/js/jquery.min.js')
    @vite('resources/js/app.js')
</body>

</html>
