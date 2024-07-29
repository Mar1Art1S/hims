<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products = Product::all();

name('ppu-dlya-napilennya');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            ППУ ДЛЯ НАПИЛЕННЯ
        </x-slot>

        <x-slot:description>
            Пінополіуретан (ППУ) для напилення - це таплоізоляційний матеріал, який відзначається високою теплоізолюючою
            здатністю. В основному виробляємо три віди пін, густиною: 10, 30 та 50 кг/м куб., відповідно для внутришнього
            використання, для стін та для покрівель. Крім цього, важливо відзначити, що ППУ не є матеріалом, в якому можуть
            жити гризуни та комахи. Між тим, він є абсолютно нешкідливим для здоровья людини та тварин. Таким чином,
            використання ППУ для напилення є ефективним заходом як для збереження енергії в будівлях, так і для запобігання
            проникненню шкідників.
        </x-slot>
    </x-category-header>

    <x-section>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach
        </div>
    </x-section>
@endsection
