
{{-- @dd($workers) --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                        
                @if (session('message'))
                <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">    {{ session('message') }}</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
{{--                         
                <div class="alert alert-success">
                    {{ session('message') }}
                </div> --}}
            @endif
            </div>
             {{-- create Teachers form --}}

        <form method="POST" class=" mb-4" action="{{ route('workers-create') }}">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                        name</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Reagan Mukabana" required>
                </div>
              {{-- 'name','place_of_work','tell','tribe','fee','dob','county','gender','next_of_keen','id_no', place_of_work--}}

                <div>
                    <label for="place_of_work"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Place Of Work</label>
                    <input type="text" id="work" name="work"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Kitchen" required>
                </div>
                <div>
                    <label for="tell" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="number" id="tell" name="tell"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
               

                <div>
                    <label for="tribe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tribe
                    </label>
                    <input type="text" id="tribe" name="tribe"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Luhya" required>
                </div>
                <div>
                    <label for="fee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary</label>
                    <input type="salary" id="fee" name="salary"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                </div>
                <div>
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB</label>
                    <input type="date" id="dob" name="dob"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="16/01/2001" required>
                </div>
                <div>
                    <label for="county"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">County</label>
                    <input type="text" id="county" name="county"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nairobi" required>
                </div>
                <div>
                    <label for="gender"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                    <input type="text" id="gender" name="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Male/Female" required>
                </div>
                <div>
                    <label for="next_of_keen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Next Of
                        Keen</label>
                    <input type="text" id="next_of_keen" name="next_of_keen"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Shalom Perazim" required>
                </div>
                <div>
                    <label for="id_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id
                        Number</label>
                    <input type="number" id="id_no" name="id_no"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="12345678" required>
                </div>
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                        required>
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree
                    with
                    the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and
                        conditions</a>.</label>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="pb-4 bg-gray-800 dark:bg-gray-900">
                    <div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-800 dark:bg-gray-800">
                                        <th 
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                           #
                                        </th>
                                         <th 
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Name
                                    </th>

                                        <th class="px-6 py-4">
                                            Work
                                        </th>
                                        <th class="px-6 py-4">
                                            Tell
                                        </th>
                                        <th class="px-6 py-4">
                                            Tribe
                                        </th>
                                        <th class="px-6 py-4">
                                            Fee
                                        </th>
                                        <th class="px-6 py-4">
                                            Dob
                                        </th>
                                        <th class="px-6 py-4">
                                            County
                                        </th>
                                        <th class="px-6 py-4">
                                            Gender
                                        </th>
                                        <th class="px-6 py-4">
                                            Next Of Keen
                                        </th>
                                        <th class="px-6 py-4">
                                            ID Number
                                        </th>
                                    </tr>
                                   @foreach ($workers as $worker)
                                   <tr>
{{--    'name','work','tell','tribe','fee','dob','county','gender','next_of_keen','id_no', --}}
                                    <td>{{$worker->iteration}}</td>
                                    <td>{{$worker->name}}</td>
                                    <td>{{$worker->work}}</td>
                                    <td>{{$worker->tell}}</td>
                                    <td>{{$worker->tribe}}</td>
                                    <td>{{$worker->fee}}</td>
                                    <td>{{$worker->dob}}</td>
                                    <td>{{$worker->county}}</td>
                                    <td>{{$worker->gender}}</td>
                                    <td>{{$worker->next_of_keen}}</td>
                                    <td>{{$worker->id_no}}</td>
                                   </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

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

            </footer>
        @endsection
