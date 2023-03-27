@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div
                        class="mx-auto border-2 border-gray-700 bg-gray-800 w-full text-center  hover:text-yellow-400 uppercase text-lg ">
                        {{ __('Dashboard') }}</div>

                    <div class="card-body bg-gray-900">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button> --}}



                        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                <a href="{{ route('students') }}"
                                    class=" no-underline text-gray-50 hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" stroke="currentColor"class="mx-auto" width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                                        </path>

                                    </svg>
                                    <div class="metric-title">
                                        <p> Students
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">5.0</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">5</div> --}}
                                </a>
                            </div>


                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">



                                {{-- <img src="teacher-icon.svg" width="32px" height="32px" class="mx-auto" alt=""> --}}
                                {{-- start --}}
                                <a href="{{ route('teachers') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none"class="mx-auto" stroke="currentColor" width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                                        </path>
                                    </svg>

                                    <div class="metric-title">
                                        <p> Teachers
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">5.0</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">5</div> --}}
                                </a>
                                {{-- end --}}
                            </div>

                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="school-building-svgrepo-com.svg"width="32px" height="32px" class="mx-auto"
                                    alt=""> --}}
                                <a href="{{ route('classes') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" class="mx-auto" stroke="currentColor"width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z">
                                        </path>
                                    </svg>



                                    <div class="metric-title ">
                                        <p> Total Classes
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">5.0</span>
                                        </p>
                                       
                                    </div>
                                    {{-- <div class="metric-value">5</div> --}}
                                </a>

                            </div>

                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="register-svgrepo-com.svg"width="32px" height="32px" class="mx-auto"
                                    alt=""> --}}
                                {{-- <center>
                                        
                                    </center> --}}
                                <a href="{{ route('Attendance') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" class=" mx-auto" stroke="currentColor" width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                        </path>
                                    </svg>

                                    <div class="metric-title"> <p>Attendance Rate 
                                        <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">85%</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">85%</div> --}}
                                </a>
                            </div>

                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="studying-exam-svgrepo-com.svg" width="32px" height="32px" class="mx-auto"
                                    alt=""> --}}
                                <a href="{{ route('Exams') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" stroke="currentColor"class="mx-auto" width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                        </path>
                                    </svg>

                                    <div class="metric-title"> <p>Exams Passed
                                        <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">80%</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">80%</div> --}}
                                </a>
                            </div>
                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="worker-svgrepo-com.svg" width="32px" height="32px" class="mx-auto"
                                    alt=""> --}}
                                <a href="{{ route('workers') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" stroke="currentColor"class="mx-auto" width="32px" height="32px"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                                        </path>
                                    </svg>

                                    <div class="metric-title"> <p> workers
                                        <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">5.0</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">5</div> --}}
                                </a>
                            </div>
                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="school-building-svgrepo-com.svg" width="32px" height="32px" class="mx-auto"
                                    alt=""> --}}
                                <a href="{{ route('noofclasses') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" stroke="currentColor" class="mx-auto" width="32px"
                                        height="32px" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21">
                                        </path>
                                    </svg>

                                    <div class="metric-title"> <p> Number of Classes
                                        <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">5.0</span>
                                    </p>
                                    </div>
                                    {{-- <div class="metric-value">5</div> --}}
                                </a>
                            </div>
                            <div
                                class=" border-solid border-zinc-800 border-2 bg-gray-800 rounded-2xl p-5 justify-center text-center hover:bg-gray-700">
                                {{-- <img src="buildings-building-construction-estate-svgrepo-com.svg" width="32px"
                                    height="32px" class="mx-auto" alt=""> --}}
                                <a href="{{ route('dommitory') }}"
                                    class=" text-gray-50 no-underline hover:text-yellow-400 hover:uppercase">
                                    <svg fill="none" stroke="currentColor"class="mx-auto" width="32px"
                                        height="32px" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z">
                                        </path>
                                    </svg>

                                    <div class="metric-title"> <p> Dommitory
                                        <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-blue-800 ml-3">6.0</span>
                                        </p>
                                    </div>
                                    {{-- <div class="metric-value">6</div> --}}
                                </a>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div>

        <h2>HEADTEACHER REMARKS </h2>

    </div> --}}
    <style>
        /* Define the grid container */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        /* Define the grid items */
        .grid-item {
            border: 1px solid #ddd;
            border-color: #424242;
            padding: 10px;
            text-align: center;
        }

        /* Define the image size */
        .grid-item img {
            width: 100%;
            height: auto;
        }
    </style>
    </head>

    <body>
        <div class="grid-container">
            <div class="grid-item">
                <img src="Class President.jpg" alt="Class President">
                <h3>Class President</h3>
                {{-- <p>Class President</p> --}}
            </div>
            <div class="grid-item">
                <img src="Student Council Treasurer.jpg" alt="Student Council Treasurer">
                <h3>Student Council Treasurer</h3>
                {{-- <p>Student Council Treasurer</p> --}}
            </div>
            <div class="grid-item">
                <img src="Athletic Team Captain.jpg" alt="Athletic Team Captain.jpg">
                <h3>Athletic Team Captain</h3>
                {{-- <p>Athletic Team Captain</p> --}}
            </div>
            <div class="grid-item">
                <img src="Debate Team Captain.jpg" alt="public\Debate Team Captain.jpg">
                <h3>Debate Team Captain</h3>
                {{-- <p>Debate Team Captain</p> --}}
            </div>
            <div class="grid-item">
                <img src="Drama Club President.jpg" alt="Drama Club President.jpg">
                <h3>Drama Club President</h3>
                {{-- <p>Drama Club President</p> --}}
            </div>
            <div class="grid-item">
                <img src="Student Newspaper Editor-in-Chief.jpg" alt="Student Newspaper Editor-in-Chief.jpg">
                <h3>Student Newspaper Editor-in-Chief</h3>
                {{-- <p>Student Newspaper Editor-in-Chief</p> --}}
            </div>
        </div>

        <footer class="  px-4 bg-gray-900 sm:p-6 dark:bg-gray-900 pl-0 ml-0 ">
            <div class=" ">
                <div class="mb-6 md:mb-0 pb-8">
                    <a href="#" class="flex items-center">
                        <img src="JRMHD LOGO 2.jpg" class="h-9 mr-4" alt="Jrmhd logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-300">JRMHD</span>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-20 sm:gap-6 sm:grid-cols-4">
                    {{-- <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-yellow-300">Resources</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="https://flowbite.com/" class="hover:text-yellow-300 no-underline text-gray-50">Flowbite</a>
                    </li>
                    <li>
                        <a href="https://tailwindcss.com/" class="hover:text-yellow-300 no-underline text-gray-50">Tailwind CSS</a>
                    </li>
                </ul>
            </div> --}}
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-yellow-300">Departments</h2>
                        <ul class="text-gray-600 dark:text-gray-400 text-left pl-0 ml-0">
                            <li class="mb-4">
                                <a href="#D"target="_blank"
                                    class="ml-0 pl-0 text-left hover:text-yellow-300 no-underline text-gray-50">Mathematics</a>
                            </li>
                            <li>
                                <a href="#" target="_blank"
                                    class="hover:text-yellow-300 no-underline text-gray-50">Science</a>
                            </li>
                            <li>
                                <a href="#" target="_blank"
                                    class="hover:text-yellow-300 no-underline text-gray-50">Games</a>
                            </li>


                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-yellow-300">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400 text-left pl-0 ml-0">
                            <li class="mb-4">
                                <a href="https://github.com/JRMHD"target="_blank"
                                    class="hover:text-yellow-300 no-underline text-gray-50 ">Github</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/techjrmhd/" target="_blank"
                                    class="hover:text-yellow-300 no-underline text-gray-50">Instagram</a>
                            </li>
                            <li>
                                <a href="https://wa.me/254706378245" target="_blank"
                                    class="hover:text-yellow-300 no-underline text-gray-50">Whatsapp</a>
                            </li>


                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase text-yellow-300">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400 text-left pl-0 ml-0">
                            <li class="mb-4">
                                <a href="#" class="hover:text-yellow-300 no-underline text-gray-50">Privacy
                                    Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-yellow-300 no-underline text-gray-50">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <svg fill="none" stroke="currentColor" width=110px height=110px stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z">
                        </path>
                    </svg>
                </div>
            </div>
            <hr class="my-1 border-gray-200 sm:mx-auto dark:border-gray-50 lg:my-8 " />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                        class="hover:text-yellow-300 no-underline text-gray-50">Jrmhd™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/JRMHDD/" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="https://www.instagram.com/techjrmhd/" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="https://twitter.com/Nairobigoat" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="https://github.com/JRMHD" target="_blank"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    {{-- <a href="https://github.com/JRMHD" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Dribbbel account</span>
            </a> --}}
                </div>
            </div>
            {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

        </footer>
    @endsection
