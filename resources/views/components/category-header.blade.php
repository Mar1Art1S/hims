@props(['title', 'description'])

<div {{ $attributes->class('flex flex-col lg:flex-row px-5 py-10 lg:gap-x-5 lg:gap-y-0 gap-y-8') }}>
    <div {{ $title->attributes->class('lg:w-1/3 flex items-center text-3xl lg:text-left text-center font-semibold text-gray-500') }}>
        {{ $title }}
    </div>
    <div {{ $description->attributes->class('lg:w-2/3 text-lg text-gray-600') }}>
        {{ $description }}
    </div>
</div>
