<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_LAK_SIKATIVI)->get();

name('prod_lak_sikativi');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СИКАТИВИ ТА ДИСПЕРГАТОРИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Сикативи та диспергатори - це речовини, які використовуються у різних галузях, зокрема у фармацевтиці, хімічній
            промисловості, фарбовому виробництві та інших галузях. Сикативи використовуються для прискорення процесу висихання фарб та
            лаків, вони каталізують окислення олігомерів та полімерів, що допомагає швидко утворювати міцні та стійкі плівки. Диспергатори
            використовуються для зниження поверхневого натягу рідини, що полегшує їх рівномірне розподілення у рідких системах та допомагає
            утримувати частинки матеріалу у стабільному стані. Ці речовини відіграють важливу роль у виробництві різних продуктів,
            забезпечуючи контроль за процесами, що відбуваються на молекулярному рівні.') }}
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
