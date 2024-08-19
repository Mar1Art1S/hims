<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_lak_prom');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СИРОВИНА ДЛЯ ЛАКОФАРБОВОЇ ПРОМИСЛОВОСТІ') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для лакофарбової промисловості включає в себе різноманітні компоненти, необхідні для виробництва фарб,
        лаків та покриттів. Основні складові включають пігменти, розчинники, смоли та добавки. Пігменти надають фарбі або
         лаку барву та покривні властивості, розчинники використовуються для розведення смол та забезпечення потрібної
         консистенції, а смоли формують основу покриття та відповідають за його міцність та стійкість. Добавки можуть включати
          антиоксиданти, антибактеріальні агенти та інші речовини, які покращують характеристики фарби або лаку. Важливо
            відзначити, що використання правильних сировинних матеріалів впливає на якість та характеристики готового продукту,
         що виготовляється в лакофарбовій промисловості.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>

        <x-decor.card>
            <x-category-v
                title=" {{ __('Сикативи та диспергатори') }}"
                description="{{ __('Сикативи та диспергатори - це речовини, які використовуються у різних галузях, зокрема у фармацевтиці, хімічній промисловості') }}"
                image="{{ asset('img/mat_5/01.jpg') }}"
                link="{{ route('prod_lak_sikativi') }}"
            />
            <x-category-v
                title=" {{ __('Каталізатори') }}"
                description="{{ __('Каталізатори - це речовини, які прискорюють хімічні реакції, не змінюючи своєї власної структури під час процесу. Вони використовуються в широкому спектрі') }}"
                image="{{ asset('img/mat_5/02.jpg') }}"
                link="{{ route('prod_lak_kataliz') }}"
            />
            <x-category-v
                title=" {{ __('Антисептики') }}"
                description="{{ __('Антисептики - це речовини або засоби, які використовуються для знищення або інгібування мікробів на поверхнях шкіри, ран або') }}"
                image="{{ asset('img/mat_5/03.jpg') }}"
                link="{{ route('prod_lak_antis') }}"
            />
            <x-category-v
                title=" {{ __('Смоли алкідно-модифіковані та бутоксильовані') }}"
                description="{{ __('Смоли алкідно-модифіковані та бутоксильовані знаходять широке використання у різних галузях промисловості, включаючи') }}"
                image="{{ asset('img/mat_5/04.jpg') }}"
                link="{{ route('prod_lak_smoli') }}"
            />
            <x-category-v
                title=" {{ __('Акрилові та акрил-поліуретанові сополімери') }}"
                description="{{ __('Акрилові та акрил-поліуретанові сополімери використовуються у широкому спектрі застосувань, включаючи виробництво фарб') }}"
                image="{{ asset('img/mat_5/05.jpg') }}"
                link="{{ route('prod_lak_akril') }}"
            />
        </x-decor.card>
    </x-section>
@endsection





