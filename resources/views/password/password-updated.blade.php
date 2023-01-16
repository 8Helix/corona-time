<x-checker-frame>
    <x-slot name="paragraph">
        {{ __('texts.password_updated') }}
    </x-slot>

    <a href="{{ route('login') }}" class="sm:mt-0 mt-48">
        <x-submit-button class="mt-10">{{ __('texts.sing_in') }}</x-submit-button>
    </a>
</x-checker-frame>
