<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_BUDIVELNIH)->get();

name('prod_klej_budivelnih');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВИЙ КЛЕЙ ДВОКОМПОНЕНТНИЙ ДЛЯ БУДІВЕЛЬНИХ МАТЕРІАЛІВ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретановий клей двокомпонентний для будівельних матеріалів використовується для склеювання різних поверхонь
            у будівництві. Цей клей складається з двох компонентів, які потрібно змішати перед застосуванням. Він забезпечує міцне з`єднання між
            такими матеріалами, як бетон, камінь, цегла, дерево, метал та пластик. Поліуретановий клей відомий своєю високою міцністю з`єднання,
            стійкістю до вологи та температурних коливань, що робить його ідеальним для внутрішніх та зовнішніх робіт у будівництві. Цей клей
            дозволяє створювати надійні та довговічні з`єднання, що важливо у вимогливих умовах будівництва.') }}

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
