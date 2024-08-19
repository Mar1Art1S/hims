<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_MASIVU)->get();

name('prod_ppu_masivu');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ ЗМІЦНЕННЯ ВУГІЛЬНОГО МАСИВУ, ЗМІЦНЕННЯ ФУНДАМЕНТІВ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Застосування пінополіуретану (ППУ) для зміцнення вугільного масиву або фундаментів може бути використано в окремих випадках як
            альтернативний метод. У випадку з фундаментами, ППУ може бути використаний для заповнення порожнин, підняття або підсилення старих
            фундаментів, а також для підтримки та утеплення нових будівельних конструкцій. Щодо зміцнення вугільного масиву, ППУ може застосовуватися
            для стабілізації шахт або тунелей, заповнення порожнин або для зміцнення підземних стін. Однак перед застосуванням ППУ для цих цілей слід
            провести детальне технічне обгрунтування, оцінку ризиків та виконати необхідні інженерні розрахунки, щоб забезпечити безпеку та
            ефективність заходів.') }}

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

