<x-password-frame>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <x-input-field name="email" type="email" :placeholder="__('texts.email_placeholder')">{{ __('texts.email') }}</x-input-field>

        <div class="sm:mt-0 mt-72">
            <x-submit-button>{{ __('texts.reset_password') }}</x-submit-button>
        </div>
    </form>
</x-password-frame>
