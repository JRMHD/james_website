<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>school system</title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
{{-- 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
    <style>
        .center-body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            /****** center box
 width: 300px;
 height: 300px;
 border: solid 1px #aaa;
 ******/
        }

        body {
            background: #262626;
        }

        .loader-circle-9 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background: transparent;
            border: 3px solid #3c3c3c;
            border-radius: 50%;
            text-align: center;
            line-height: 70px;
            font-family: sans-serif;
            font-size: 12px;
            color: #00eaff;
            text-transform: uppercase;
            box-shadow: 0 0 20px rgba(0, 0, 0, .5);
        }

        .loader-circle-9:before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            width: 100%;
            height: 100%;
            border: 3px solid transparent;
            border-top: 3px solid #00eaff;
            border-right: 3px solid #00eaff;
            border-radius: 50%;
            animation: animateC 2s linear infinite;
        }

        .loader-circle-9 span {
            display: block;
            position: absolute;
            top: calc(50% - 2px);
            left: 50%;
            width: 50%;
            height: 4px;
            background: transparent;
            transform-origin: left;
            animation: animate 2s linear infinite;
        }

        .loader-circle-9 span:before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #00eaff;
            top: -6px;
            right: -8px;
            box-shadow: 0 0 20px #00eaff;
        }

        @keyframes animateC {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate {
            0% {
                transform: rotate(45deg);
            }

            100% {
                transform: rotate(405deg);
            }
        }

        .css-3d-text {
            font-size: 51px;
            color: #230f87;
            font-family: "Arial Black", Gadget, sans-serif;
            text-shadow: 0px 0px 0 rgb(14, -6, 114),
                1px 1px 0 rgb(-8, -28, 92),
                2px 2px 0 rgb(-30, -50, 70),
                3px 3px 0 rgb(-51, -71, 49),
                4px 4px 0 rgb(-72, -92, 28),
                5px 5px 0 rgb(-94, -114, 6),
                6px 6px 0 rgb(-115, -135, 0),
                7px 7px 0 rgb(-137, -157, 0),
                8px 8px 0 rgb(-158, -178, 0),
                9px 9px 0 rgb(-180, -200, 0),
                10px 10px 0 rgb(-201, -221, 0),
                11px 11px 10px rgba(242, 234, 5, 0.6),
                11px 11px 1px rgba(242, 234, 5, 0.5),
                0px 0px 10px rgba(242, 234, 5, .2);
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-image: url(img/background.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>

<body class="antialiased">
    <div class="relative  items-top justify-center min-h-screen   sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block bg-gray-800 text-gray-200">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="background-image">
            {{-- <h1 class="text-gray-800">SCHOOL MANAGEMENT SYSTEM</h1> --}}
            <div class="css-3d-text mx-auto   my-auto mt-96">
                <span class="mx-auto ml-64">SCHOOL MANAGEMENT SYSTEM</span>
            </div>
            {{-- <img src="https://images.unsplash.com/photo-1495954147468-729898cbe8aa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt=""> --}}
        </div>


    </div>        

    <div id="loader" class="center-body">
        <div class="loader-circle-9">Loading
            <span></span>
        </div>
    </div>
    {{-- <script>
        $('#loader').delay(1000).hide(0);
        $('#body').delay(1000).style.visibility = "visible";
    </script> --}}
    <style>
        #loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
        }
    </style>
     
    <script>
        
    $(window).on('load', function() {
        $('#loader').fadeOut(3500);
    })
    </script>
   
</body>

</html>
