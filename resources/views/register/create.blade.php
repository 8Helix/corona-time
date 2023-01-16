<x-create>
    <x-slot name="header">{{ __('texts.welcome_to_corona') }}</x-slot>
    <x-slot name="paragraph">{{ __('texts.enter_info_to_sing_up') }}</x-slot>

    <form method="POST" action="/register" class="sm:mb-0 mb-10">
        @csrf

        <x-input-field name="username" placeholder="{{ __('texts.username_placeholder') }}">
            {{ __('texts.username') }}</x-input-field>
        <x-input-field name="email" type="email" placeholder="{{ __('texts.email_placeholder') }}">
            {{ __('texts.email') }}</x-input-field>
        <x-input-field name="password" type="password" placeholder="{{ __('texts.password_placeholder') }}">
            {{ __('texts.password') }}
        </x-input-field>
        <x-input-field name="password_confirmation" type="password"
            placeholder="{{ __('texts.repeat_password_placeholder') }}">{{ __('texts.repeat_password') }}
        </x-input-field>

        <x-submit-button>{{ __('texts.sing_up') }}</x-submit-button>

        <div class="mt-5 sm:w-96 w-80 text-center">
            <p class="text-dark-60 sm:text-base text-sm">
                {{ __('texts.already_have_account') }}<a href="{{ route('login') }}" class="text-dark-100 font-bold">{{ __('texts.log_in') }}</a>
            </p>
        </div>
    </form>
</x-create>
