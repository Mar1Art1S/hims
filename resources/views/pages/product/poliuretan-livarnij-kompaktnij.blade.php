<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_LIVARNIJ)->get();

name('prod_pu_livarnij');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАН ЛИВАРНИЙ КОМПАКТНИЙ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретан ливарний компактний є популярним матеріалом для виготовлення різноманітних виробів, таких як сувеніри, елементи декору
            інтер`єру, фасади, меблі, меблева фурнітура та комплектуючі. Його широко використовують через його властивості, які дозволяють легко моделювати
            та створювати різноманітні форми. Він дуже міцний, має високу стійкість до механічних пошкоджень і корозії, а також легкий у використанні.
            Методи ручної та машинної заливки дозволяють створювати якісні імітації деревини з високою ступенем деталізації, що робить його дуже
            популярним у сфері дизайну та виробництва меблів та інтер`єрних виробів.') }}
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

