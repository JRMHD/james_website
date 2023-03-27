<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-gray-900 shadow-sm border-b-2 border-b-gray-700">
            <div class="container bg-gray-900 mx-auto text-center justify-center w-full">
                <a class="navbar-brand w-full" href="{{ url('/') }}">
                    <span class=" text-gray-200 hover:text-yellow-400 uppercase text-2xl mx-auto w-full">
                        {{ config('app.name', 'Laravel') }}</span>
                </a>


                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo"> --}}
                    <svg class="w-8 h-8 rounded-full " fill="white" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                @if (Auth::user())
                    <div id="dropdownAvatar"
                        class="z-10 hidden bg-gray-900 border-2 border-gray-700 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 overflow-x-hidden ">
                        <div class="grid grid-cols-2 gap-0">

                            <div class="px-1 py-3 mx-auto">
                                {{-- <svg class="w-8 h-8 rounded-full " fill="white" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg> --}}
                                <img class="w-8 h-8 rounded-full " src="{{ asset('img/regan.png') }}" alt="">
                            </div>
                            <div class="px-1 py-6 text-sm text-gray-900 dark:text-white text-left">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 px-0 mx-0 text-left"
                            aria-labelledby="dropdownUserAvatarButton">
                            {{-- <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li> --}}
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-white">Settings</a>
                            </li>
                            {{-- <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li> --}}
                        </ul>
                        <div class="py-2 bg-gray-700 rounded-full">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                Sign out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endif

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">\
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-gray-900 text-gray-200">
            @yield('content')
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>

</html>
