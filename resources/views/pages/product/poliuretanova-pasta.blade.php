<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PASTA)->get();

name('prod_pu_pasta');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВА ПАСТА') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретанова паста - це матеріал, який зазвичай використовується для ремонту або реставрації різних поверхонь, таких як меблі, підлоги,
            а також в ремонтних роботах у будівництві та ремонті автомобілів. Вона має властивості, які дозволяють легко моделювати та формувати її
            під потрібну конфігурацію, а після затвердіння вона стає міцною та стійкою до впливу середовища. Поліуретанова паста може бути також використана
            для заповнення тріщин, вирівнювання поверхонь та ремонту пошкоджень, забезпечуючи естетичний вигляд та довговічність об`єкту.') }}
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


