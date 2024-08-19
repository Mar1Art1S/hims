<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_KARTONU)->get();

name('prod_klej_kartonu');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('Водорозчинні клеї для паперу та картону') }}
        </x-slot>

        <x-slot:description>
            {{ __('Водорозчинні клеї для паперу та картону використовуються в різних галузях, таких як друкарство, упаковка, реклама та
            рукоділля. Ці клеї ефективно з`єднують папірні матеріали, такі як папір, картон, фотографії, етикетки тощо, забезпечуючи
            міцне та надійне з`єднання. Вони швидко сохнуть, мають добру адгезію та стійкість до вологи, що робить їх ідеальними для
            використання в умовах друкарських процесів або при виготовленні упаковки, де потрібно швидко та ефективно склеїти паперові
            або картонні вироби. Водорозчинні клеї також можуть бути безпечними для використання, оскільки вони зазвичай не містять
            розчинників або токсичних речовин.') }}

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
