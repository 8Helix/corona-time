<p class="font-bold">{{ auth()->user()->username }}</p>

<div class="hidden sm:block w-0.5 h-10 bg-dark-20"></div>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">{{ __('texts.log_out') }}</button>
</form>
