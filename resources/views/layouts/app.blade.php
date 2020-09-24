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

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex justify-center min-h-screen bg-gray-900 sm:items-center sm:pt-0">
            {{-- @livewire('navigation-dropdown') --}}
            @if (Route::has('login'))
                @guest
                    @if (Route::has('register'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        </div>
                    @endif
                @endguest
            @endif

            <!-- Page Content -->
            <main class="min-h-screen min-w-full">
                {{ $slot }}
            </main>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
