@props(['paragraph'])

<x-layout>
    <div class="flex flex-col justify-center items-center mt-8 gap-44">
        <img src="/images/Coronatime.png" alt="Coronatime">

        <div class="flex flex-col justify-center items-center">
            <x-svg.checked></x-svg.checked>

            <p class="mt-4 text-dark-100">{{ $paragraph }}</p>

            {{ $slot ?? null}}
        </div>
    </div>
</x-layout>
