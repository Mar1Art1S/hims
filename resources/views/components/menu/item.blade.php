@props(['link', 'active' => false])

<li
    {{ $attributes->class([
        'bg-amber-500/90 lg:bg-transparent rounded-lg h-20 justify-center flex items-center',
        'font-bold' => $active,
    ]) }}>
    <a class="text-xl text-white uppercase font-r300 hover:text-amber-500 md:text-base" href="{{ $link }}">
        {{ $slot }}
    </a>
</li>
