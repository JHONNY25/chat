<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo class="w-20 h-20 text-lg mb-5"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="text-white">
            @csrf

            <div>
                <x-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm hover:text-gray-300" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 bg-gray-900 hover:bg-gray-700">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
