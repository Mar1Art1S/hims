@props(['animation', 'image', 'title', 'description', 'color', 'link'])

<div class="relative group">
    <div class="group-hover:hidden">
        <img class="object-cover" src="{{ $image }}" alt="" />
        <div class="absolute top-0 z-20 bg-slate-500/80">
            <h3 class="z-20 px-5 py-3 text-3xl font-semibold leading-10 text-white uppercase">
                {{ $title }}
            </h3>
        </div>

        <div class="absolute flex items-center justify-center lg:hidden bottom-5 right-5 size-12 bg-slate-500/50">
            <x-lucide-pointer class="text-white size-5" />
        </div>
    </div>

    <div class="absolute inset-0 hidden bg-gray-700 group-hover:block">
        <h4 class="px-5 pt-5 text-2xl leading-7 text-gray-200 uppercase">
            {{ $title }}
        </h4>
        <p class="p-5 text-gray-200">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center mt-5">
            <a href="{{ $link }}">
                <x-button>
                    {{ __('Далі') }}
                </x-button>
            </a>
        </div>
    </div>
</div>
