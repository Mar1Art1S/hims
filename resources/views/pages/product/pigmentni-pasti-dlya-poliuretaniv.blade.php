<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PIGMENT)->get();

name('prod_pu_pigment');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПІГМЕНТНІ ПАСТИ ДЛЯ ПОЛІУРЕТАНІВ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Пігментні пасти для поліуретанів - це спеціальні забарвлювальні добавки, які використовуються для надання бажаного кольору
            поліуретановим матеріалам. Їх використовують у виробництві різних продуктів, включаючи меблі, вироби з пластику, покриття для підлоги
            та інші вироби. Пігментні пасти дозволяють досягти різноманітності кольорів і відтінків, що робить їх популярними в індустрії дизайну
            та виробництва. Вони зазвичай додаються до поліуретанових смол або лаків під час їх виготовлення, забезпечуючи однорідне та стійке
            забарвлення поверхні. Такі пігменти дозволяють створювати індивідуальний дизайн і відтінки, що відповідають конкретним потребам та
            вимогам замовника.') }}

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
