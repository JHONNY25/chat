<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Chat') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            .clearfix2:after{
                visibility: hidden;
                display: block;
                font-size: 0;
                content: ' ';
                clear: both;
                height: 0;
            }
        </style>
        @livewireStyles
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="flex justify-center min-h-screen bg-gray-900 sm:items-center sm:pt-0">
            <!-- Page Content -->
            <main class="min-w-full">
                <div class="lg:w-full xl:w-9/12 mx-auto my-auto">
                    <div class="overflow-hidden shadow-xl rounded-none ">
                        <div class="grid grid-cols-3 min-w-full" style="min-height: 90vh;">
                            <div class="col-span-1 bg-gray-800 border-r border-gray-600">
                                <div class="">
                                    @livewire('navigation-dropdown')
                                </div>

                                @livewire('search-input')

                                <div>
                                    <h2 class="ml-2 text-gray-200 text-lg my-2">Chats</h2>
                                    @livewire('user-chat')
                                </div>
                            </div>
                            <div class="col-span-2 bg-gray-700">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script>
            const messagescontent = document.getElementById("messages-content");
            messagescontent.scrollTop = messagescontent.scrollHeight;
        </script>

    </body>
</html>
