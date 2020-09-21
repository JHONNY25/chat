<x-guest-layout>
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm bg-transparent text-white py-2 px-4 border border-white rounded">Register</a>
        @endif
    </div>

    <x-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="text-white">
            @csrf

            <div>
                <x-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm hover:text-gray-300" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 bg-gray-900 hover:bg-gray-700">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
