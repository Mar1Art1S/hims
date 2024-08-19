<?php
use App\Enums\CategoryEnum;
use App\Models\Product;
use function Laravel\Folio\name;


$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_NAPILENNYA)->get();

name('prod_ppu_napilennya');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ НАПИЛЕННЯ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Пінополіуретан (ППУ) для напилення - це таплоізоляційний матеріал, який відзначається високою теплоізолюючою здатністю.
            В основному виробляємо три віди пін, густиною: 10, 30 та 50 кг/м куб., відповідно для внутришнього використання, для стін та для покрівель.
            Крім цього, важливо відзначити, що ППУ не є матеріалом, в якому можуть жити гризуни та комахи. Між тим, він є абсолютно нешкідливим для здоровья
            людини та тварин. Таким чином, використання ППУ для напилення є ефективним заходом як для збереження енергії в будівлях, так і для запобігання
            проникненню шкідників.') }}

        </x-slot>

    </x-category-header>
    <livewire:search/>
{{--@dump($products)--}}
    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
