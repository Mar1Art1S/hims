@extends('layouts.base')

@section('content')
    <x-section class="my-0 bg-amber-400">
        <div class="flex-col items-center justify-center hidden w-full lg:flex">
            <div class="flex flex-row items-center justify-center">
                <div class="flex flex-col justify-center w-2/3 tg:w-1/2 md:w-full">
                    <h1
                        class="text-[120px] text-white font-r900 leading-[100px] drop-shadow-lg uppercase p-10 text-left md:text-center md:py-10">
                        {{ __('Хімічна сировина') }}
                        <span class=" block text-[55px] text-white font-r700 leading-[60px] drop-shadow-lg uppercase ">
                            {{ __('ВИРОБНИЦТВО ТА ПОСТАЧАННЯ') }}
                        </span>
                    </h1>
                </div>
                <div class="flex items-center w-1/2 text-white main_text__block md:w-full">
                    <div class="p-8 bg-blue-700 rg:p-4 main_text__box-text bg-opacity-70">
                        <h2
                            class="text-6xl font-r700 leading-[60px] text-white rg:text-2xl tg:text-2xl tg:leading-6 fg:text-2xl md:text-center md:text-5xl md:leading-[50px] sm:text-2xl xs:leading-7 xs:text-1.5xl">
                            {{ __('Ласкаво просимо у компанію') }}
                            <span class="text-amber-300 font-r900 drop-shadow-lg">{{ __('Хімпостачальник!') }}</span>
                        </h2>
                        <h3 class="mt-5 mb-5 main_text__text md:text-center fg:mt-2 fg:mb-2 sm:mb-2 sm:mt-2">
                            <span
                                class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                                {{ __('Ми понад 25 років займаємось виробництвом та постачанням високотехнологічних хімічних
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            речовин.') }}
                            </span>
                            <span
                                class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                                {{ __('Знайдемо для Вас відповідне рішення.') }}</span>
                            <span
                                class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                                {{ __('Залиште замовлення і ми зв’яжемося з Вами.') }}</span>
                        </h3>

                    </div>
                </div>
            </div>
        </div>

        <livewire:search />
    </x-section>

    <x-section class="container mx-auto">
        <x-slot:caption>
            {{ __('ЧОМУ ВИБИРАЮТЬ САМЕ НАС?') }}
        </x-slot>

        <div class="grid grid-cols-2 lg:grid-cols-6 gap-x-8">
            <x-why-us image="{{ asset('img/4_icon/1.svg') }}" title="{{ __('Рішення будь-якого завдання') }}" />
            <x-why-us image="{{ asset('img/4_icon/2.svg') }}" title="{{ __('Перевірені матеріали') }}" />
            <x-why-us image="{{ asset('img/4_icon/3.svg') }}" title="{{ __('Швидкість виконання') }}" />
            <x-why-us image="{{ asset('img/4_icon/4.svg') }}" title="{{ __('Нестандартні рішення') }}" />
            <x-why-us image="{{ asset('img/4_icon/5.svg') }}" title="{{ __('Сучасне виробництво') }}" />
            <x-why-us image="{{ asset('img/4_icon/6.svg') }}" title="{{ __('Гарантія якості') }}" />
        </div>
    </x-section>

    <x-section>
        <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/001.jpg') }}" link="{{ route('ppy_serovine') }}" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit ." description=""
                image="{{ asset('img/categories/002.jpg') }}" link="" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/003.jpg') }}" link="" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/004.jpg') }}" link="" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/005.jpg') }}" link="" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/006.jpg') }}" link="" />
            <x-category animation="vertical" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/007.jpg') }}" link="" />
        </div>
    </x-section>
@endsection
