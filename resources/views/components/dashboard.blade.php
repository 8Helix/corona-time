<x-layout>
        <header class="md:px-24 sm:px-12 px-4 py-5 flex items-center justify-between border-b border-dark-10">
            <div class="logo"></div>

            <div class="flex items-center gap-4 text-dark-100">
                <div x-data="{ show: false }" @click.away="show = false" class="relative sm:text-base text-sm bg-white pointer">
                    <div @click="show=!show">
                        <button class="py-2 pl-3 pr-9 font-semibold w-26 lg:w-30 text-left flex items-center lg:inline-flex focus:outline-none">
                            <span>{{ app()->getlocale() == 'en' ? __('texts.english') : __('texts.georgian')}}</span>

                            <div class="absolute pointer-events-none" style="right: 2px;">
                                <x-svg.down-arrow></x-svg.down-arrow>
                            </div>
                        </button>
                    </div>

                    <div x-show="show" class="py-2 absolute mt-2 w-full z-50 overflow-auto bg-white border border-dark-4" style="display: none">
                        <div class="pl-3 py-1">
                            <a href="/change-locale/en" class="focus:outline-none">{{ __('texts.english') }}</a>
                        </div>
                        <div class="pl-3 py-1">
                            <a href="/change-locale/ka" class="focus:outline-none">{{ __('texts.georgian') }}</a>
                        </div>
                    </div>
                </div>

                <div x-data="{ showh: false }" @click.away="showh = false">
                   <div @click="showh=!showh" class="sm:hidden">
                      <x-svg.lines></x-svg.lines>
                   </div>

                   <div x-show="showh" class="py-2 px-4 absolute w-32 mt-3 -ml-20 z-40 overflow-auto bg-white border border-dark-4" style="display: none">
                        <x-header-part></x-header-part>
                    </div>
                </div>

                <div class="sm:flex hidden items-center gap-4 ml-8 ">
                    <x-header-part></x-header-part>
                </div>
        </header>

        <div class="md:px-24 sm:px-12 px-4 pb-12 mb-6">
            <h1 class="font-extrabold 2xl:text-3xl md:text-2xl text-xl 2xl:mt-24 md:mt-12 mt-6">
                {{ request()->path() == '/' ?  __('texts.worldwide_statistics') :  __('texts.country_statistics')  }}
            </h1>

            <div class="sm:mt-10 mt-6 border-b border-dark-4">
                <a href="{{ route('home') }}" class="inline-block sm:text-base text-sm sm:mr-16 mr-6 font-bold py-4 focus:outline-none cursor-pointer
                                                    {{ request()->path() == '/' ? 'border-b-3 border-dark-100' : '' }}">
                    {{ __('texts.worldwide') }}
                </a>
                <a href="{{ route('bycountry') }}" class="inline-block sm:text-base text-sm font-bold py-4 focus:outline-none cursor-pointer
                                                        {{ request()->path() == 'bycountry' ? 'border-b-3 border-dark-100' : '' }}">
                    {{ __('texts.country') }}
                </a>
            </div>

            {{ $slot }}
        </div>
</x-layout>
