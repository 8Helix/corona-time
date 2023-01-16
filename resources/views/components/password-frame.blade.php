<x-layout>
    <div class="flex flex-col justify-center items-center mt-8">
        <img src="/images/Coronatime.png" alt="Coronatime">

        <div class="flex flex-col justify-center items-center mt-12">
            <h1 class="text-dark-100 md:text-2xl text-xl font-extrabold">{{ __('texts.reset_password') }}</h1>

            {{ $slot }}
        </div>
    </div>
</x-layout>
