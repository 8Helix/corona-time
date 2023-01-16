@props(['header', 'paragraph'])

<x-layout>
    <section class="flex h-screen w-screen sm:mt-0 mt-4">
        <div class="lg:flex-1 lg:pt-10 lg:block lg:pl-28 w-full flex flex-col items-center">
            <div class="mt-2">
                <div class="logo"></div>
                <h1 class="font-extrabold sm:text-2xl text-xl sm:mt-14 mt-6">{{ $header }}</h1>
                <p class="font-normal sm:text-xl text-base text-dark-60 sm:mt-4 mt-2">{{ $paragraph }}</p>

                {{ $slot }}
            </div>
        </div>
        <div class="lg:flex-1">
            <img src="/images/Vaccine.png" alt="Vaccine Image" class="lg:w-full w-0">
        </div>
    </section>
</x-layout>
