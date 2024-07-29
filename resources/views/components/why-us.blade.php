@props(['image', 'title'])

<div class="my-14">
    <div class="flex flex-col items-center justify-center h-40 text-center bg-gray-100 rounded-2xl">
        <div class="flex flex-wrap justify-center p-6 text-center rounded-2xl bg-amber-100">
            <img class="size-20" src="{{ $image }}" alt="">
        </div>

        <h4 class="text-xl uppercase my5 text-zinc-500">
            {{ $title }}
        </h4>
    </div>
</div>
