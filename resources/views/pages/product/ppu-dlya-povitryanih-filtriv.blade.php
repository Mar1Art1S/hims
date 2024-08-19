<?php
use App\Enums\CategoryEnum;
use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PPU_FILTRIV)->get();

name('prod_ppu_filtriv');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ППУ ДЛЯ ПОВІТРЯНИХ ФІЛЬТРІВ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Пінополіуретан (ППУ) використовується для виготовлення повітряних фільтрів завдяки своїм властивостям, таким як висока пористість,
            міцність і хімічна стійкість. ППУ фільтри здатні ефективно усувати тверді частки, пил, бактерії та інші забруднення з повітря, забезпечуючи високу
            ефективність очищення. Вони також можуть мати довгий термін служби і витримувати високі температури та агресивні середовища. ППУ фільтри знаходять
            застосування в різних галузях, включаючи промисловість, медицину, автомобільну промисловість та багато інших, де вимагається висока якість
            повітря та його очищення.') }}

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

