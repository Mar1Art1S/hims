<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KILIMA)->get();

name('py_kilima');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('СИРОВИНА ДЛЯ ПОЛІУРЕТАНОВОГО КАМ`ЯНОГО КИЛИМА') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для поліуретанового кам`яного килима включає в себе поліуретанові смоли, наповнювачі (такі як камінь,
            пісок або гравій), пігменти для забарвлення та додаткові добавки для зміцнення або покращення властивостей кінцевого
            продукту. Ці матеріали зазвичай змішуються разом і наносяться на підготовлену поверхню для створення товстого та
            міцного покриття, яке надає відчуття природного каменю. Поліуретанові кам`яні килими застосовуються в інтер`єрах та
            екстер`єрах як декоративне покриття для підлоги, стін, доріжок та інших поверхонь, завдяки своїй витривалості,
            водонепроникності та естетичному вигляду') }}

        </x-slot>

    </x-category-header>
    <livewire:search />

    <x-section>
        <x-decor.card>
            @foreach ($products as $product)
                <x-product :product="$product" />
            @endforeach

        </x-decor.card>
    </x-section>
@endsection
