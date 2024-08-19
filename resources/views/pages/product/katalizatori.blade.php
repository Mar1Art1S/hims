<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_KATALIZ)->get();

name('prod_lak_kataliz');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('КАТАЛІЗАТОРИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Каталізатори - це речовини, які прискорюють хімічні реакції, не змінюючи своєї власної структури під час процесу. Вони
            використовуються в широкому спектрі промислових процесів, включаючи синтез хімічних сполук, полімеризацію, гідрогенізацію та
            інші. Каталізатори забезпечують зниження енергії активації реакції, що призводить до прискорення швидкості реакції і зменшення
            витрат енергії. Вони можуть бути використані у великих масштабах у промисловості або у більш малих кількостях у лабораторних
            умовах для досліджень і розробок нових методів синтезу та виробництва. Каталізатори дозволяють покращити ефективність процесів
            і знизити їхню вплив на навколишнє середовище, що робить їх важливими компонентами в хімічній промисловості.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>

    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
