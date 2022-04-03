<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'When2Meet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">

                <div class="flex space-x-4">
                    <!-- logo -->
                    <div>
                        <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <svg class="h-6 w-6 mr-1 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            <span class="font-bold">Better Dev</span>
                        </a>
                    </div>

                    <!-- primary nav -->
                    <div class="hidden sm:flex items-center space-x-1">
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Features</a>
                        <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Pricing</a>
                    </div>
                </div>

                <!-- secondary nav -->
                <div class="hidden sm:flex items-center space-x-1">
                    <a href="" class="py-5 px-3">Login</a>
                    <a href="" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
                </div>

                <!-- mobile button goes here -->
                <div class="sm:hidden flex items-center">
                    <button id="expand" class="mobile-menu-button">
                        asdasd
                    </button>
                </div>

            </div>
        </div>

        <!-- mobile menu -->
        <div class="mobile-menu hidden sm:hidden">
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Features</a>
            <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">Pricing</a>
        </div>
    </nav>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script>

    // add event listeners
    window.onload = () => {
        let menu = document.querySelector(".mobile-menu");
        let btn = document.querySelector("button.mobile-menu-button");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }




</script>
</body>
</html>
