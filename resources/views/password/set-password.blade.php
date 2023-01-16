<x-password-frame>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input name="token" id="token" value="{{ $token }}" style="display:none" />
        <input name="email" id="email" value="{{ $email }}" style="display:none" />

        <x-input-field name="password" type="password" :placeholder="__('texts.enter_new_password')">{{ __('texts.new_password') }}</x-input-field>
        <x-input-field name="password_confirmation" type="password" :placeholder="__('texts.repeat_password')">{{ __('texts.repeat_password') }}</x-input-field>

        <div class="sm:mt-0 mt-48">
            <x-submit-button>{{ __('texts.save_changes') }}</x-submit-button>
        </div>
    </form>
</x-password-frame>
