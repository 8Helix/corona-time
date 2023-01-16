<x-dashboard>
    <div class="mt-10 relative">
        <form method="GET" action="#">
            <input class="h-12 w-60 sm:text-base text-sm pl-14 sm:border border-dark-20 rounded-lg focus:outline-none"
                   name="search" type="text" value="{{ request('search') }}"
                   placeholder="Search by country" />
        </form>

        <div class="absolute top-4 left-5">
            <x-svg.search></x-svg.search>
        </div>
    </div>

    <div class="flex flex-col mt-10 overflow-auto shadow md:rounded-lg" style="max-height: 600px">
        <div class="flex-grow overflow-auto">
            <table class="relative w-full md:pr-96">
                <thead>
                    <tr class="md:pr-96">
                        <th class="sticky top-0 md:px-6 px-2 py-5 text-left bg-dark-4">
                            <span class="md:text-base text-xs">{{ __('texts.location') }}</span>
                            <div class="ml-1 inline-block">
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=name&order=desc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-up color="{{ request('sort') == 'name' && request('order') == 'desc' ? '#000' : '#BFC0C4' }}" />
                                </a>
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=name&order=asc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-down color="{{ !request('sort') || request('sort') == 'name' && request('order') == 'asc' ? '#000' : '#BFC0C4' }}"/>
                                </a>
                            </div>
                        </th>
                        <th class="sticky top-0 md:px-6 px-2 py-5 text-left bg-dark-4">
                            <span class="md:text-base text-xs">{{ __('texts.new_cases') }}</span>
                            <div class="ml-1 inline-block">
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=confirmed&order=asc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-up color="{{ request('sort') == 'confirmed' && request('order') == 'asc' ? '#000' : '#BFC0C4' }}" />
                                </a>
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=confirmed&order=desc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-down color="{{ request('sort') == 'confirmed' && request('order') == 'desc' ? '#000' : '#BFC0C4' }}"/>
                                </a>
                            </div>
                        </th>
                        <th class="sticky top-0 md:px-6 px-2 py-5 text-left bg-dark-4">
                            <span class="md:text-base text-xs">{{ __('texts.recovered') }}</span>
                            <div class="ml-1 inline-block">
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=deaths&order=asc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-up color="{{ request('sort') == 'deaths' && request('order') == 'asc' ? '#000' : '#BFC0C4' }}" />
                                </a>
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=deaths&order=desc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-down color="{{ request('sort') == 'deaths' && request('order') == 'desc' ? '#000' : '#BFC0C4' }}"/>
                                </a>
                            </div>
                        </th>
                        <th class="sticky top-0 pl-6 py-5 text-left bg-dark-4 pr-40">
                            <span class="md:text-base text-xs">{{ __('texts.deaths') }}</span>
                            <div class="ml-1 inline-block">
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=recovered&order=asc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-up color="{{ request('sort') == 'recovered' && request('order') == 'asc' ? '#000' : '#BFC0C4' }}" />
                                </a>
                                <a class="focus:outline-none" href="{{route('bycountry')}}?sort=recovered&order=desc&{{http_build_query(request()->except('sort', 'order'))}}">
                                    <x-svg.vector-down color="{{ request('sort') == 'recovered' && request('order') == 'desc' ? '#000' : '#BFC0C4' }}"/>
                                </a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="pr-96">
                    @foreach ($countries as $country)
                        <tr class="border-b w-full border-dark-4 pr-96">
                            <td class="md:pl-6 pl-2 py-4">{{ $country->name}}</td>
                            <td class="md:pl-6 pl-2 py-4">{{ $country->confirmed }}</td>
                            <td class="md:pl-6 pl-2 py-4">{{ $country->deaths }}</td>
                            <td class="md:pl-6 pl-2 py-4">{{ $country->recovered }}</</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</x-dashboard>
