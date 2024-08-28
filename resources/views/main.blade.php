@extends('layouts.base')

@section('content')
    <x-section class="my-0 bg-amber-400">
        <x-decor.fon/>
        <div>
        <div class="relative z-20 flex flex-col items-center justify-center">
            <div
                class="absolute flex flex-row justify-center items-center -top-[600px] lf:-top-[480px] md:flex-col rg:-top-[350px] tg:-top-[280px] md:-top-[720px] sm:-top-[620px] sf:-top-[520px] xs:-top-[480px]">
                <div class="flex flex-col justify-center w-2/3 tg:w-1/2 md:w-full">
                    <h1
                        class="text-[160px] text-white font-r900 leading-[140px] drop-shadow-lg uppercase p-10 text-left rg:text-[100px] rg:leading-[100px] tg:text-[80px] md:text-center md:py-10 sf:text-[60px] sf:leading-[60px] xs:text-[40px] xs:leading-[46px]">
                        {{__('Хімічна сировина')}}
                        <span class=" block text-[55px] text-white font-r700 leading-[60px] drop-shadow-lg uppercase ">
                        {{__('ВИРОБНИЦТВО ТА ПОСТАЧАННЯ')}} </span>
                    </h1>
                </div>
                <div class="flex items-center w-1/2 text-white main_text__block md:w-full">
                    <div class="p-8 bg-blue-700 rg:p-4 main_text__box-text bg-opacity-70">
                        <h2
                            class="text-6xl font-r700 leading-[60px] text-white rg:text-2xl tg:text-2xl tg:leading-6 fg:text-2xl md:text-center md:text-5xl md:leading-[50px] sm:text-2xl xs:leading-7 xs:text-1.5xl">
                            {{__('Ласкаво просимо у компанію')}}
                            <span class="text-amber-300 font-r900 drop-shadow-lg">{{__('Хімпостачальник!')}}</span>
                        </h2>
                        <h3 class="mt-5 mb-5 main_text__text md:text-center fg:mt-2 fg:mb-2 sm:mb-2 sm:mt-2">
                        <span
                            class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                            {{__('Ми понад 25 років займаємось виробництвом та постачанням високотехнологічних хімічних
                            речовин.')}}
                        </span>
                            <span
                                class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                            {{__('Знайдемо для Вас відповідне рішення.')}}</span>
                            <span
                                class="text-xl leading-3 text-white font-r400 tg:text-sm tg:leading-1 md:drop-shadow-lg sm:text-sm xs:font-xf">
                            {{__('Залиште замовлення і ми зв’яжемося з Вами.')}}</span>
                        </h3>

                    </div>
                </div>
            </div>
        </div>
        </div>

        <livewire:search/>
    </x-section>

    <x-section class="container mx-auto">
        <x-slot:caption>
            {{ __('ЧОМУ ВИБИРАЮТЬ САМЕ НАС?') }}
        </x-slot>

        <div class="grid grid-cols-6 fg:grid-cols-2 gap-x-8">
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/1.svg') }}" title="{{ __('Рішення будь-якого завдання') }}"/>
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/2.svg') }}" title="{{ __('Перевірені матеріали') }}"/>
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/3.svg') }}" title="{{ __('Швидкість виконання') }}"/>
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/4.svg') }}" title="{{ __('Нестандартні рішення') }}"/>
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/5.svg') }}" title="{{ __('Сучасне виробництво') }}"/>
            <x-why-us image="{{ Vite::asset('resources/img/4_icon/6.svg') }}" title="{{ __('Гарантія якості') }}"/>
        </div>
    </x-section>

    <x-section>
        <x-decor.card>
            <x-category
                title=" {{ __('СИРОВИНА ДЛЯ ПІНОПОЛІУРЕТАНА') }}"
                description="{{ __('Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину для жорстких пін.') }}"
                image="{{ Vite::asset('resources/img/categories/001.jpg') }}"
                link="{{ route('ppy_serovine')
            }}"
            />
            <x-category
                title="{{ __('СИРОВИНА ДЛЯ ПОЛІУРЕТАНУ') }}"
                description="{{ __('Сировина для поліуретану, яка включає поліолі та ізоціанати, широко використовується у виробництві поліуретанових...') }}"
                image="{{ Vite::asset('resources/img/categories/002.jpg') }}"
                link="{{ route('py_serovine')
            }}"
            />
            <x-category
                title="{{ __('СИРОВИНА ДЛЯ ПОЛІУРЕТАНОВОГО КАМ`ЯНОГО КИЛИМА') }}"
                description="{{ __('Сировина для поліуретанового кам`яного килима включає в себе поліуретанові смоли, наповнювачі (такі як камінь, пісок або ...') }} "
                image="{{ Vite::asset('resources/img/categories/003.jpg') }}"
                link="{{ route('py_kilima')
            }}"
            />
            <x-category
                title="{{ __('ПОЛІУРЕТАНОВІ КЛЕЇ') }}"
                description="{{ __('Поліуретанові клеї широко використовуються в різних галузях промисловості та ремонту. Вони є дуже міцними та мають широкий спектр застосувань завдяки своїм...') }}"
                image="{{ Vite::asset('resources/img/categories/004.jpg') }}"
                link="{{ route('py_klei')
            }}"
            />
            <x-category
                title="{{ __('СИРОВИНА ДЛЯ ЛАКОФАРБОВОЇ ПРОМИСЛОВОСТІ') }}"
                description="{{ __('Сировина для лакофарбової промисловості включає в себе різноманітні компоненти, необхідні для виробництва фарб, лаків та покриттів.') }}"
                image="{{ Vite::asset('resources/img/categories/007.jpg') }}"
                link="{{ route('py_lak_prom')
            }}"
            />
            <x-category
                title="ВИРОБИ З ЛИВАРНОГО ПОЛІУРЕТАНУ"
                description="{{ __('Вироби з ливарного поліуретану широко застосовуються в різних галузях через їхню високу міцність, легкість та') }}"
                image="{{ Vite::asset('resources/img/categories/012.jpg') }}"
                link="{{ route('py_pol')
            }}"
            />
            <x-category
                title="{{ __('ЕФЕКТ МОКРОГО КАМЕНЮ') }}"
                description="{{ __('Сировина для поліуретанового ефекту мокрого каменю включає в себе поліуретанові смоли, спеціальні наповнювачі, пігменти для створення') }}"
                image="{{ Vite::asset('resources/img/mat_3/2.jpg') }}"
                link="{{ route('py_emk')}}"
            />
        </x-decor.card>
    </x-section>
@endsection
