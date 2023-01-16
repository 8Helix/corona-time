<x-dashboard>
    <div class="mt-10 mb-4 grid sm:grid-cols-3 grid-cols-2 gap-10">
        <x-card col="2" bgcolor="rgba(32, 41, 243, 0.08)" color="#2029F3" :paragraph="__('texts.new_cases')" :number="number_format($confirmed)">
            <x-svg.vector-1></x-svg.vector-1>
        </x-card>
        <x-card col="1" bgcolor="rgba(15, 186, 104, 0.08)"  color="#0FBA68" :paragraph="__('texts.recovered')" :number="number_format($recovered)">
            <x-svg.vector-2></x-svg.vector-2>
        </x-card>
        <x-card col="1" bgcolor="rgba(234, 214, 33, 0.08)"  color="#EAD621" :paragraph="__('texts.deaths')" :number="number_format($deaths)">
            <x-svg.vector-3></x-svg.vector-3>
        </x-card>
    </div>
</x-dashboard>
