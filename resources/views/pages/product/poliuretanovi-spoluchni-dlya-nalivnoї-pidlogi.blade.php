<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_PIDLOGI)->get();

name('prod_pu_pidlogi');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ СПОЛУЧНІ ДЛЯ НАЛИВНОЇ ПІДЛОГИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретанові сполучні для наливної підлоги є важливою складовою конструкції наливної підлоги, яка використовується для створення
            стійкого, міцного та естетично привабливого покриття. Ці сполучні матеріали використовуються для зв`язування піску або кварцового піску
            з поліуретановою смолою, утворюючи рівномірний та міцний шар. Вони забезпечують не лише міцність, але й добре зчіплення з підкладкою, що
            дозволяє підлозі протистояти механічним навантаженням і забезпечує довговічність покриття. Крім того, поліуретанові сполучні можуть бути
            додані різні добавки для покращення характеристик підлоги, таких як водонепроникність, антистатичність або здатність до зменшення
            утворення шуму.') }}
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

