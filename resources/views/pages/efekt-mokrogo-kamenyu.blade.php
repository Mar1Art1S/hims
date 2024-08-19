<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_EMK)->get();

name('py_emk');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ЕФЕКТ МОКРОГО КАМЕНЮ') }}

        </x-slot>

        <x-slot:description>
            {{ __('Сировина для поліуретанового ефекту мокрого каменю включає в себе поліуретанові смоли, спеціальні наповнювачі,
            пігменти для створення бажаного кольору та текстури, а також добавки для покращення властивостей покриття. Ці
            компоненти змішуються разом і наносяться на поверхню, де вони створюють ефект мокрого каменю, що надає відчуття
            свіжої вологи або легкого блиску, схожого на те, що спостерігається на природних кам`яних поверхнях. Поліуретановий
            ефект мокрого каменю широко використовується для декорування внутрішніх та зовнішніх приміщень, таких як підлоги,
            стіни, басейни, фонтани та інші об`єкти, де вимагається естетичне та стійке до зносу покриття зі специфічним
            виглядом.') }}

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
