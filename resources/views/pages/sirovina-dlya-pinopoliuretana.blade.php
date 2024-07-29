<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('ppy_serovine');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            СИРОВИНА ДЛЯ ПІНОПОЛІУРЕТАНА (ППУ)
        </x-slot>

        <x-slot:description>
            Сировина для пінополіуретана складається з двох компонентів – поліолу та ізоцианату. Ми виробляємо сировину для
            жорстких пін. Такі піни використовуються для виготовлення теплоізоляційних матеріалів методом напилення або
            наливом у форми, для стабілізації грунтів та вугільних масивів, для вироблення декору та негабарітних виробів,
            наливу між стінами, технічні ізоляційні продукти. Відзначається за високою теплоізоляційною та жорсткою
            властивістю, що робить її популярною у будівництві, автомобільний промисловості, джільництві, гірничобудівної
            промисловості. ЗБЕРІГАЄ ВЛАСТИВОСТІ ВІД 40 років.
        </x-slot>
    </x-category-header>

    <x-section>
        <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">
            <x-category animation="horizontal" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/001.jpg') }}" link="{{ route('ppu-dlya-napilennya') }}" />
            <x-category animation="horizontal" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/001.jpg') }}" link="" />
            <x-category animation="horizontal" title="Lorem ipsum dolor sit amet." description=""
                image="{{ asset('img/categories/001.jpg') }}" link="" />
        </div>
    </x-section>
@endsection
