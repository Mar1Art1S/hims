<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_KRIHTI)->get();

name('prod_klej_krihti');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ КЛЕЇ ДЛЯ ГУМОВОЇ ТА EPDM КРИХТИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретанові клеї для гумової та EPDM (етиленпропілендієновий каучук) крихти широко використовуються для з`єднання гумових
            поверхонь між собою або з іншими матеріалами. Ці клеї мають високу адгезію до гуми та EPDM, що дозволяє створювати міцні та стійкі
            з`єднання. Вони застосовуються в різних галузях, включаючи виробництво гумових виробів, таких як килими, резинові покриття або спортивні
            майданчики, а також у промисловості для ремонту та монтажу гумових конвеєрних стрічок, ущільнювачів та інших деталей. Поліуретанові клеї
            для гуми та EPDM відомі своєю міцністю, стійкістю до впливу середовища та здатністю до роботи при різних температурах, що робить їх
            популярними в різноманітних промислових застосуваннях.') }}

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
