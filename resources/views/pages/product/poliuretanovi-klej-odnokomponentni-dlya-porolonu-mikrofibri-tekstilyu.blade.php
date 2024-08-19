<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_TEKSTILYU)->get();

name('prod_klej_tekstilyu');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ КЛЕЇ ОДНОКОМПОНЕНТНІ ДЛЯ ПОРОЛОНУ, МІКРОФІБРИ, ТЕКСТИЛЮ.') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретановий клей однокомпонентний призначений для склеювання поролону, мікрофібри та текстилю. Він використовується
в текстильній промисловості, виробництві меблів, автомобільному тюнінгу та інших галузях. Цей клей забезпечує міцне з`єднання без складних
процедур змішування та має високу адгезію до різних матеріалів. Він також добре поглинає удари і вібрацію, що робить його відмінним вибором
для використання в сферах, де важливо надійне та комфортне з`єднання пористих матеріалів.') }}

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
