<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('ppy_serovine');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СИРОВИНА ДЛЯ ПІНОПОЛІУРЕТАНА (ППУ)') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину
            для
            жорстких пін. Такі піни використовуються для виготовлення теплоізоляційних матеріалів методом напилення або
            наливом у форми, для стабілізації грунтів та вугільних масивів, для вироблення декору та негабарітних
            виробів,
            наливу між стінами, технічні ізоляційні продукти. Відзначається за високою теплоізоляційною та жорсткою
            властивістю, що робить її популярною у будівництві, автомобільний промисловості, джільництві,
            гірничобудівної
            промисловості. ЗБЕРІГАЄ ВЛАСТИВОСТІ ВІД 40 років.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('ППУ для напилення') }}"
                description="{{ __('Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину для жорстких пін') }}"
                image="{{ asset('img/6_PPU_grup/001.jpeg') }}"
                link="{{ route('prod_ppu_napilennya')
            }}"
            />
            <x-category-v
                title="{{ __('ППУ для шкарлупи') }}"
                description="{{ __('Застосовується у виробництві теплоізоляційних напівциліндрів (шкарлуп), призначених для теплоізоляції трубопровідних систем теплопостачання та ') }}"
                image="{{ asset('img/6_PPU_grup/002.jpeg') }}"
                link="{{ route('prod_ppu_shkarlupi')
            }}"
            />
            <x-category-v
                title="{{ __('ППУ попередньо-ізольованих труб') }}"
                description="{{ __('Попередньо ізольовані пінополіуретаном труби є дуже ефективної та сучасної технологією енергозбереження') }} "
                image="{{ asset('img/6_PPU_grup/003.jpeg') }}"
                link="{{ route('prod_ppu_trub')
            }}"
            />
            <x-category-v
                title="{{ __('ППУ для заливки Сендвіч-панелей') }}"
                description="{{ __('ППУ широко використовується для виробництва сендвіч-панелей і торговельного холодильного обладнання') }}"
                image="{{ asset('img/6_PPU_grup/004.jpeg') }}"
                link="{{ route('prod_ppu_sendvich')
            }}"
            />
            <x-category-v
                title=" {{ __('ППУ для декору та негабаритних виробів') }} "
                description=" {{ __('Пінополіуретан (ППУ) може бути використаний для декору та виробів негабаритних розмірів, таких як вулики тощо. ППУ може бути легко формованим') }} "
                image="{{ asset('img/6_PPU_grup/005.jpeg') }}"
                link="{{ route('prod_ppu_virobiv') }}"/>
            <x-category-v
                title=" {{ __('ППУ для зміцнення вугільного масиву, зміцнення фундаментів') }} "
                description=" {{ __('Застосування пінополіуретану (ППУ) для зміцнення вугільного масиву або фундаментів може бути використано в окремих випадках як альтернативний метод') }} "
                image="{{ asset('img/6_PPU_grup/006.jpeg') }}"
                link="{{ route('prod_ppu_masivu') }}"/>
            <x-category-v
                title=" {{ __('ППУ для заливання міжстінного простору') }} "
                description=" {{ __('Використання пінополіуретану (ППУ) для заливання міжстінного простору є поширеною практикою в будівництві') }} "
                image="{{ asset('img/6_PPU_grup/007.jpeg') }}"
                link="{{ route('prod_ppu_prostoru') }}"/>
            <x-category-v
                title=" {{ __('ППУ для повітряних фільтрів') }} "
                description=" {{ __('Пінополіуретан (ППУ) використовується для виготовлення повітряних фільтрів завдяки своїм властивостям, таким як висока пористість, міцність і') }} "
                image="{{ asset('img/6_PPU_grup/008.jpeg') }}"
                link="{{ route('prod_ppu_filtriv') }}"/>

        </x-decor.card>
    </x-section>
@endsection
