<x-create>
    <x-slot name="header">{{ __('texts.welcome_back') }}</x-slot>
    <x-slot name="paragraph">{{ __('texts.enter_your_details') }}</x-slot>

    <form method="POST" action="{{ route('auth') }}">
        @csrf

        <x-input-field name="username" placeholder="{{ __('texts.username_email_placeholder') }}">
            {{ __('texts.username') }}</x-input-field>
        <x-input-field name="password" type="password" placeholder="{{ __('texts.password_placeholder') }}">
            {{ __('texts.password') }}
        </x-input-field>

        <div class="flex items-center justify-between mt-6 sm:w-96 w-80">
            <div>
                <input name="remember" id="remember" type="checkbox" class="w-4 h-4 inline accent-system-success" />
                <label for="remember" class="font-bold sm:text-base text-xs">{{ __('texts.remember_device') }}</label>
            </div>
            <a href="{{ route('password.request') }}" class="text-brand-primary sm:text-base text-xs">{{ __('texts.forgot_password') }}</a>
        </div>

        <x-submit-button>{{ __('texts.log_in') }}</x-submit-button>

        <div class="mt-5 sm:w-96 w-80 text-center">
            <p class="text-dark-60 sm:text-base text-sm">{{ __('texts.dont_have_account') }}
                <a href="{{ route('register') }}" class="text-dark-100 font-bold">{{ __('texts.sign_up_free') }}</a>
            </p>
        </div>
    </form>
</x-create>
