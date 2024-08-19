<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\CategoryEnum;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_PROSTORU)->get();

name('prod_ppu_prostoru');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ ЗАЛИВАННЯ МІЖСТІННОГО ПРОСТОРУ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Використання пінополіуретану (ППУ) для заливання міжстінного простору є поширеною практикою в будівництві. ППУ може бути застосований
            для утеплення та ущільнення проміжків між стінами будівлі, що допомагає підвищити теплоізоляцію та зменшити витрати на опалення та
            кондиціонування повітря. Крім того, застосування ППУ для заливання міжстінного простору може також зміцнити конструкцію будівлі та
            запобігти появі мікротріщин та вологозбір у внутрішніх приміщеннях. ППУ легко заливається у простори будь-якої форми та розміру, і після
            застигання утворює однорідний і міцний шар, який забезпечує ефективну теплоізоляцію та ущільнення.') }}

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

