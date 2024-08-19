@props(['image', 'title', 'description', 'link'])

<x-decor.flip>

    <div class="relative front">
        <img class="absolute" src="{{ $image }}" alt="" />
        <h3
            class="absolute pl-5 leading-[40px] text-3xl font-r900 bg-slate-800 bg-opacity-50 w-[400px] h-[400px] uppercase lf:w-[300px] lf:h-[300px] lf:text-2xl">
            {{ $title }}
        </h3>
    </div>
    <div class="back">
        <h4 class="pt-5 text-1.5xl leading-[28px] font-r700 text-center">
            {{ $title }}
        </h4>
        <p class="pt-10 pb-10 text-1.5xl font-r400 m-2  leading-[24px] text-center">
            {{ $description }}
        </p>
        <div class="flex items-center justify-center">
            <a class="inline-block px-12 py-3 text-sm font-r400 text-white border border-white rounded bg-amber-400 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white"
               href="{{ $link }}">
                {{ __('Далі') }}
            </a>
        </div>
    </div>

</x-decor.flip>
