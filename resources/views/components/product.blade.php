@props(['product'])

<div class="relative bg-orange-700 group h-80">
    <div class="group-hover:hidden">
        <h3 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h3>

        <div class="flex flex-col mx-5 mt-5">
            @foreach ($product->options as $options)
                <div class="flex flex-row justify-between w-full">
                    <div class="text-white">
                        {{ $options['name'] }}
                    </div>
                    <div class="font-bold text-white">
                        {{ $options['parameter'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="absolute flex items-center justify-center lg:hidden bottom-5 right-5 size-12 bg-slate-500/50">
            <x-lucide-pointer class="text-white size-5" />
        </div>
    </div>

    <div class="absolute inset-0 hidden bg-gray-700 group-hover:block">
        <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h4>
        <div class="flex flex-col items-center justify-center mt-5 space-y-3">
            <x-button class="w-40 bg-blue-800">{{ __('TDS') }}</x-button>
            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40">{{ __('Купити') }}</x-button>
                </x-slot>
                <livewire:order product="{{ $product['name'] }}" />
            </x-modal>
        </div>
    </div>
</div>
