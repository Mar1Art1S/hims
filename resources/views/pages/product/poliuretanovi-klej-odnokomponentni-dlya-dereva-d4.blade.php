<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_DEREVA_D4)->get();

name('prod_klej_dereva_d4');
?>

@extends('layouts.base')

@section('title', __('Однокомпонентні поліуретанові клеї D4 для дерева – надійність і стійкість до вологи'))
@section('meta_description', __('Однокомпонентні поліуретанові клеї D4 для дерева забезпечують міцне та водостійке
з`єднання для внутрішніх і зовнішніх робіт. Ідеальні для застосування у виробництві меблів, вікон, дверей та інших дерев`яних
конструкцій, що піддаються впливу вологи. Клей відзначається високою адгезією, стійкістю до екстремальних умов та довговічністю.'))
@section('meta_keywords', __('однокомпонентний поліуретановий клей D4, поліуретановий клей для дерева D4, водостійкий клей для деревини,
клей для зовнішніх дерев`яних конструкцій, поліуретановий клей для меблів, клей для дерев`яних вікон та дверей, міцне з`єднання для деревини,
клей для вологих умов'))


@section('og_title', __('Однокомпонентні поліуретанові клеї D4 для дерева – надійність і стійкість до вологи'))
@section('og_description', __('Однокомпонентні поліуретанові клеї D4 для дерева забезпечують міцне та водостійке
з`єднання для внутрішніх і зовнішніх робіт. Ідеальні для застосування у виробництві меблів, вікон, дверей та інших дерев`яних
конструкцій, що піддаються впливу вологи. Клей відзначається високою адгезією, стійкістю до екстремальних умов та довговічністю.'))

@section('og_image', Vite::asset('resources/img/mat_4/02.jpg'))

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ КЛЕЇ ОДНОКОМПОНЕНТНІ ДЛЯ ДЕРЕВА Д4') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретановий клей однокомпонентний для дерева є відмінним вибором для склеювання дерев`яних деталей в різних проектах столярного
            виробництва та будівництва. Цей клей має ряд переваг, включаючи простоту використання, адгезію до різних видів деревини, високу міцність
            з`єднання та стійкість до впливу вологи та температурних коливань. Він швидко твердіє, що дозволяє прискорити процес виробництва.
            Поліуретановий клей також забезпечує гнучкість у з`єднанні, що дозволяє дерев`яним деталям рухатися без ризику розриву з`єднання. Це робить
            його ідеальним вибором для меблевого виробництва, столярних ремонтних робіт та будівельних проектів, де вимагається надійне та стійке з`єднання
            дерев`яних елементів.') }}

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
