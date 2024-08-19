<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_SENDVICH)->get();

name('prod_ppu_sendvich');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ ВИРОБНИЦТВА СЕНДВІЧ ПАНЕЛЕЙ ТА ТОРГІВЕЛЬНОГО ХОЛОДИЛЬНОГО ОБЛАДНАННЯ.') }}
        </x-slot>

        <x-slot:description>
            {{ __('ППУ широко використовується для ВИРОБНИЦТВА "сендвіч-панелей" і торговельного холодильного обладнання. ППУ ТАКОЖ може використовуватися
            для ТЕПЛОІЗОЛЯЦІЇ вентиляційних систем, та інших частин обладнання. ППУ є відмінним ізоляційним матеріалом, оскільки має низьку
            теплопровідність і високу міцність. Він також легкий у використанні, може бути формований під будь-які розміри та форми, що робить його ДУЖЕ
            ЗРУЧНИМ ПРИ ВИКОРИСТАННІ.') }}
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

