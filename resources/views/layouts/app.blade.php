<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="ICT Cortex Library - project for high school students..." />
    <meta name="keywords" content="ict cortex, cortex, bild, bildstudio, highschool, students, coding" />
    <meta name="author" content="bildstudio" />
    <!-- End Meta -->

    <!-- Title -->
    <title>Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- End Title -->

    <!-- Styles -->
    <!-- @include('layouts.partials.styles') -->
    <!-- End Styles -->
    
    @vite('resources/css/app.css')
    @include('layouts.partials.styles')
    
    @vite('resources/js/jquery.min.js')
    @vite('resources/js/app.js')
    
    
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    @include('layouts.partials.header')
    <!-- Header -->

    <!-- Main content -->
    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')
        <!-- End Sidebar -->

        <!-- Content -->
        <section class="w-screen h-screen py-4 pl-[60px] text-[#212121]">
            <!-- Heading of content -->
            <div class="heading">
                <h1 class="pl-[50px] pb-[20px] text-[35px] text-[#5c5c5c] font-bold border-b-[2px] border-[#e4dfdf]">
                    Heading of the section
                </h1>
            </div>
            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <p class="pl-[50px] pt-[20px] text-[20px]">
                    Content of the section
                </p>
            </div>
        </section>
        <!-- End Content -->
    </main>
    <!-- End Main content -->

    <!-- Notification for small devices -->   
    @include('layouts.partials.inProgress')


    <!-- Scripts -->
    @include('layouts.partials.scripts')
    <!-- End Scripts -->

    
</body>

</html>