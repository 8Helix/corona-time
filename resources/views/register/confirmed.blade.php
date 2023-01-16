<x-checker-frame>
    <x-slot name="paragraph">
        {{ __('texts.account_is_confirmed') }}
    </x-slot>

    <a href="{{ route('login') }}">
        <x-submit-button>{{ __('texts.sing_in') }}</x-submit-button>
    </a>
</x-checker-frame>
