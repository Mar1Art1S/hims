<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_VIROBIV)->get();

name('prod_ppu_virobiv');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ ДЕКОРУ ТА НЕГАБАРИТНИХ ВИРОБІВ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Пінополіуретан (ППУ) може бути використаний для декору та виробів негабаритних розмірів, таких як вулики тощо. ППУ може бути легко
            формованим у різні форми і розміри, що робить його дуже корисним для виробництва різноманітних декоративних елементів та негабаритних виробів.
            Він також має відмінні теплоізоляційні властивості, які можуть бути корисними для додаткової ізоляції або захисту від впливу навколишнього
            середовища. Такі властивості роблять ППУ популярним матеріалом для використання в різних галузях, включаючи будівництво, декор і виробництво.') }}
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

