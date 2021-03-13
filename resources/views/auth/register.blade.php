<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('message.yourname') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="apellido1" value="{{ __('message.apellido1') }}" />
                <x-jet-input id="apellido1" class="block mt-1 w-full" type="text" name="apellido1" :value="old('apellido1')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="apellido2" value="{{ __('message.apellido2') }}" />
                <x-jet-input id="apellido2" class="block mt-1 w-full" type="text" name="apellido2" :value="old('apellido2')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('message.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('message.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('message.retypepassword') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('message.aceptola') !!} <a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">{!! ucfirst(__('message.politicaprivacidad')) !!}</a> {!! __('message.y') !!} <a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">{!! ucfirst(__('message.politicacookies')) !!}</a>
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('message.yaestasregistrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('authpra.register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
