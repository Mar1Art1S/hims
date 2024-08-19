@props(['product'])

<x-decor.flip>
    <div class="front w-[400px] h-[400px] lf:w-[370px] lf:h-[370px] tg:w-[350px] tg:h-[350px] fg:w-[320px] fg:h-[320px] md:w-[370px] md:h-[370px]">
        <h2 class="p-3 mb-5 text-2xl font-r700 uppercase text-white text-center"> {{ $product->name }} </h2>
        <div>
            @foreach ($product->options as $options)
                <div class="w-full px-4 flex flex-row items-center mt-4 ">
                    <div class="w-3/4 justify-start text-start text-white text-sm">{{ $options['name'] }}</div>
                    <div class="w-1/4 justify-end text-end text-white text-sm flex-nowrap font-bold">{{ $options['parameter'] }}</div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="back">
        <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h4>
        <div class="flex flex-col items-center justify-center mt-5 space-y-3">
            <a href="{{ asset('storage/' . $product->tds_file) }}"><x-button class="w-40 bg-blue-800">{{ __('TDS') }}</x-button></a>

            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40">{{ __('Купити') }}</x-button>
                </x-slot>
                <livewire:order product="{{ $product['name'] }}"/>
            </x-modal>

        </div>
    </div>
</x-decor.flip>


