<?php

use function Laravel\Folio\name;
use App\Models\Product;
use App\Enums\CategoryEnum;
$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_SHKARLUPI)->get();

name('prod_ppu_shkarlupi');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ шкарлупи') }}
        </x-slot>

        <x-slot:description>
            {{ __('Застосовується у виробництві теплоізоляційних напівциліндрів (шкарлуп), призначених для теплоізоляції трубопровідних систем теплопостачання
            та опалення, гарячого та холодного водопостачання, для ремонту пошкоджених ділянок тепломереж. Заливання пінополіуретану може здійснюватися як вручну,
            так і за допомогою заливальних машин.') }}

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

