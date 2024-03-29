<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo class="w-20 h-20 text-lg mb-5"/>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}" class="text-white">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full text-gray-900" type="email" name="email" :value="old('email', $request->email)" required autofocus />
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
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
