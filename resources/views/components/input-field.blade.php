@props(['name'])

<div class="sm:mt-8 mt-4">
    <label for="{{ $name }}" class="block font-bold sm:text-base text-sm">{{ $slot }}</label>

    <input name="{{ $name }}" id="{{ $name }}" {{ $attributes(['type' => 'text']) }}
        class="block border border-dark-20 focus:outline-none py-2 px-6 rounded-lg sm:w-96 w-80 mt-2"/>

    @error($name)
        <div class="mt-2 flex gap-2 items-center">
            <x-svg.vector-error></x-svg.vector-error>
            <p class="text-system-error text-red-500 text-xs">{{ $message }}</p>
        </div>
    @enderror
</div>
