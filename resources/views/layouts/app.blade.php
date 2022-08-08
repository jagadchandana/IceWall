<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <x-libraries.meta/>
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->

        <!-- END: CSS Assets-->
        {{-- <x-libraries.styles/> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <x-components.mobi-nav/>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <x-components.header/>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <x-components.side-bar/>
                 <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    {{ $page }}
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-dashboard-overview-2.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
        {{-- <x-libraries.scripts/> --}}

        <!-- END: JS Assets-->
    </body>
</html>



