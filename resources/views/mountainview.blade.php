@extends('layouts.app')

@section('content')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    {{-- <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <style>
        .result {
            height: 72px;
            width: 100%;
            border: 1px solid #000;
        }

        .result_hover {
            background-color: #da1313;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">

            <div class=" text-center col-md-12">
                <H1>Mountain View</H1>
            </div>
        </div>

        <div id="default-carousel" class="relative" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 https://flowbite.com/docs/images/carousel/carousel-3.svg -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="256.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="654476206-H - Copy.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="boarding-department-s.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="download (3).jpeg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="images.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="container mx-auto py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="relative overflow-hidden rounded-lg shadow-lg hovershow">
                    <img class="w-full h-64 object-cover hovershow" src="256.jpeg" alt="dom">
                    <div class="absolute inset-0 bg-black opacity-50 "></div>
                    <div class="absolute bottom-0 left-0 p-4 group">
                        <h3 class="text-lg font-semibold text-white hovershow">Arrangement</h3>

                        <p id="2h" class="text-gray-300 span-show hidden hovershow">
                            <span>Well arranged beds Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Deserunt numquam unde maiores itaque exercitationem,
                                veniam,
                                enim
                                blanditiis natus fuga, voluptate dignissimos sapiente?</span>
                        </p>

                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg hovershow2">
                    <img class="w-full h-64 object-cover hovershow2" src="download (3).jpeg" alt="Photo 2">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <h3 class="text-lg font-semibold text-white hovershow2">Student Boxes</h3>
                        <p id="3h" class="text-gray-300 span-show hidden hovershow2">
                            <span> A good place to arrange student Boxes. Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Eius nam ducimus error cumque modi odio alias molestias, voluptates
                                laudantium, dicta minima asperiores praesentium quod consectetur rerum culpa ex corporis
                                neque?</span>
                        </p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg hovershow3">
                    <img class="w-full h-64 object-cover hovershow3" src="654476206-H - Copy.jpg" alt="Photo 3">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <h3 class="text-lg font-semibold text-white hovershow3">Bedding </h3>
                        <p id="4h" class="text-gray-300 span-show hidden hovershow3 ">Well equiped beds Lorem ipsum
                            dolor sit amet consectetur adipisicing elit. Corporis nesciunt magni eligendi voluptatum
                            expedita totam excepturi suscipit sequi commodi unde, maiores itaque, repudiandae accusantium
                            harum aspernatur neque voluptates doloremque! Doloremque.</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg hovershow4">
                    <img class="w-full h-64 object-cover hovershow4" src="images.jpeg" alt="Photo 4">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <h3 class="text-lg font-semibold text-white hovershow4">Organized</h3>
                        <p id="5h" class="text-gray-300 span-show hidden hovershow4">Nicely organized room Lorem
                            ipsum dolor sit amet consectetur, adipisicing elit. Nisi velit ad dolore nostrum inventore quis
                            neque, porro dolorum necessitatibus adipisci nihil impedit dolores sapiente, voluptatibus
                            debitis voluptates consequuntur fuga dolor..</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg ">
                    <img class="w-full h-64 object-cover " src="654476206-H - Copy.jpg" alt="Photo 5">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <h3 class="text-lg font-semibold text-white hovershow5">Bedding</h3>
                        <p id="6h" class="text-gray-300 span-show hidden hovershow5 ">Nicely organized room Lorem
                            ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem ut accusamus vel blanditiis,
                            necessitatibus velit, quasi dolore eaque voluptates, porro laborum sed. Ducimus, voluptas
                            dignissimos reprehenderit magni excepturi numquam eum..</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //     $(".hovershow").hover(
            //         alert("hello");

            //         function() {
            //             $("#2h").addClass("group-hover:block");
            //         },
            //         function() {
            //             $("#2h").removeClass("hidden");
            //         }
            //     );
            // 
        </script>
        <script>
            $(".hovershow").hover(
                function() {
                    $("#2h").removeClass("hidden");
                },
                function() {
                    $("#2h").addClass("hidden");
                }
            );
            // ikii
            $(".hovershow2").hover(
                function() {
                    $("#3h").removeClass("hidden");
                },
                function() {
                    $("#3h").addClass("hidden");
                }
            );
            $(".hovershow3").hover(
                function() {
                    $("#4h").removeClass("hidden");
                },
                function() {
                    $("#4h").addClass("hidden");
                }
            );
            $(".hovershow4").hover(
                function() {
                    $("#5h").removeClass("hidden");
                },
                function() {
                    $("#5h").addClass("hidden");
                }
            );
            // gxdgsdg
            $(".hovershow5").hover(
                function() {
                    $("#6h").removeClass("hidden");
                },
                function() {
                    $("#6h").addClass("hidden");
                }
            );
        </script>

    </div>
@endsection
