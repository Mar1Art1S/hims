<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_PARKETU)->get();

name('prod_klej_parketu');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВИЙ КЛЕЙ ДВОКОМПОНЕНТНИЙ ДЛЯ ПАРКЕТУ ТА ЗАГАЛЬНОБУДІВЕЛЬНОГО ПРИЗНАЧЕННЯ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретановий клей двокомпонентний для паркету та загальнобудівельного призначення використовується для монтажу паркетних
            дощок та інших дерев`яних покриттів підлоги, а також для склеювання різних будівельних матеріалів, таких як деревина, бетон,
            камінь, пластик та метал. Цей клей має дві компоненти, які потрібно змішати перед застосуванням, та відомий своєю високою міцністю
            з`єднання та стійкістю до вологи та термічних коливань. Він забезпечує надійне та довговічне з`єднання, що робить його ідеальним для
            використання як у професійному монтажі паркету, так і у загальних будівельних роботах, де потрібно міцне та стійке з`єднання
            різних матеріалів.') }}

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
