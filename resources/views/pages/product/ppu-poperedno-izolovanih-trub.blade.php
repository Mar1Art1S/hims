<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_TRUB)->get();

name('prod_ppu_trub');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ для попередньо ізольованих труб') }}
        </x-slot>

        <x-slot:description>
            {{ __('Попередньо ізольовані пінополіуретаном труби є дуже ефективною та сучасною технологією енергозбереження. Ми виробляємо дві рецептури для
            різних типів заливочних машин з різним співідношенням компонентів') }}

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

