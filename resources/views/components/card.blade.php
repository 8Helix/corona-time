@props(['paragraph', 'number', 'bgcolor', 'color', 'col'])

<div style="background-color:{{ $bgcolor }}" class='h-64 bg-opacity-8 sm:col-span-1 col-span-{{$col}} flex flex-col rounded-xl items-center justify-end pb-10'>
    {{ $slot }}
    <p class="md:text-xl text-base font-semibold mt-6">{{ $paragraph }}</p>
    <span style="color:{{ $color }}" class="mt-4 md:text-4xl text-2xl font-extrabold">{{ $number  }}</span>
</div>
