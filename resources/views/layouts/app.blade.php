<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Dashboard</title>

    <!-- Styles and fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/>
    @include('layouts.partials.styles')
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    @include('layouts.partials.header')

    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Content -->
        <section class="w-screen h-screen py-4 pl-[60px] text-[#212121]">
            <!-- Heading of content -->
            <div class="heading">
                <h1 class="pl-[50px] pb-[20px] text-[35px] text-[#5c5c5c] font-bold border-b-[2px] border-[#e4dfdf]">
                    @yield('title', 'Dashboard')
                </h1>
            </div>

            <!-- Main content -->
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
