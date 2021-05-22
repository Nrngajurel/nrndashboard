<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @if(isset($title))
                {{ $title }} - {{ config('app.name', 'Laravel') }}
            @else
                {{ config('app.name', 'Laravel') }}
            @endif

        </title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="h-screen overflow-hidden bg-gray-100">

            <!-- Page Content -->
            <main>
                <div class="flex" x-data="{ enable_mobile_nav:false }">
                    <div class="min-h-screen duration-200 inset-0 transform md:translate-x-0 absolute w-64 z-30 md:relative md:w-3/12 lg:w-2/12  h-full bg-blue-500 shadow text-gray-50"
                        :class="{'translate-x-0 ease-in':enable_mobile_nav === true, '-translate-x-full ease-out':enable_mobile_nav === false}"
                    >
                        <div class="flex justify-end sm:hidden">
                            <button @click="enable_mobile_nav = !enable_mobile_nav" class="p-3"> <i data-feather="chevron-left"></i>  </button>
                        </div>
                            <div class="flex justify-center items-end pt-6">
                                <x-jet-application-mark class="block h-9 wx-auto px-2" /> <span class="py-auto font-bold">{{ config('app.name') }}</span>
                            </div>
                            <nav class="pt-6">
                                <ul>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="home"></i></span>Dashboard </a></li>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="folder"></i></span>Post </a></li>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="layers"></i></span>Categories </a></li>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="user"></i></span>User </a></li>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="settings"></i></span>Settings </a></li>
                                    <li class="w-full"><a class="px-6 text-base py-2 flex flex-align-center hover:bg-blue-600" href="#"> <span class="px-3 inline-block"><i data-feather="log-out"></i></span>Logout </a></li>

                                </ul>
                            </nav>

                    </div>
                    <div class="max-h-screen w-full md:w-9/12 lg:w-10/12 overflow-hidden overflow-y-scroll">

                        <div class="flex-shrink-0 flex items-center sm:hidden">
                            <button @click="enable_mobile_nav = !enable_mobile_nav">enable</button>
                        </div>

                        <div class="sticky top-0 shadow-sm">
                            @livewire('navigation-menu')
                            {{--                        header--}}
                            @if (isset($header))
                                <header class="bg-white">
                                    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                                        <h2 class="font-semibold text-sm text-gray-700 leading-tight">
                                            {{ $header }}
                                        </h2>

                                    </div>
                                </header>
                            @endif
                        </div>

{{--                        content--}}
                        <div class="">
                            {{ $slot }}

                        </div>
                    </div>
                </div>

            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
