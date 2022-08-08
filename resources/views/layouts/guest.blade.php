<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
       <x-libraries.meta/>
        <title>Login - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <x-libraries.styles/>
        <!-- END: CSS Assets-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
               {{ $page }}
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                {{ $form }}
                <!-- END: Login Form -->
                <br><br><br>
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="login-dark-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>

        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
       <x-libraries.scripts/>
        <!-- END: JS Assets-->
    </body>
</html>
