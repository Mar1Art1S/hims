<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_PU_ELASTOMIRI)->get();

name('prod_pu_elastomiri');
?>

@extends('layouts.base')

@section('content')
    <x-category-header>
        <x-slot:title>
            {{ __('ПОЛІУРЕТАНОВІ ЕЛАСТОМІРИ') }}
        </x-slot>

        <x-slot:description>
            {{ __('Поліуретанові еластомери широко використовуються в різних галузях через їх властивості, такі як висока зносостійкість, гнучкість,
            довговічність та хімічна стійкість. Вони застосовуються у виробництві різноманітних ущільнювачів, прокладок, ременів передачі потужності,
            амортизаторів, взуття, покриття для різноманітних поверхонь, у виробництві автомобільних деталей, електронних пристроїв та багато іншого.
            Вони також можуть бути використані у медичній техніці, спортивному обладнанні, техніці безпеки та багатьох інших галузях завдяки своїм
            унікальним властивостям.') }}

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

