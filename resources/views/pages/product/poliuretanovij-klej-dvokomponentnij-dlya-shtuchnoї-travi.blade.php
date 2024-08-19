<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_TRAVI)->get();

name('prod_klej_travi');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВИЙ КЛЕЙ ДВОКОМПОНЕНТНИЙ ДЛЯ ШТУЧНОЇ ТРАВИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретановий клей двокомпонентний для штучної трави використовується для монтажу та кріплення штучного газону
            або штучної трави на різних поверхнях, таких як бетон, асфальт, деревина або пластик. Цей клей зазвичай має високу міцність
            з`єднання і стійкість до впливу погодних умов, температурних змін і ультрафіолетового випромінювання. Він забезпечує надійне
            кріплення штучної трави до основи, утворюючи міцне та стійке з`єднання, яке дозволяє штучному газону залишатися на місці протягом
            тривалого часу. Цей клей є важливим компонентом у процесі встановлення штучного газону та допомагає забезпечити стійкість та
            довговічність покриття.') }}

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
