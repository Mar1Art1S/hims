@extends('layouts.base')

@section('content')
<section class="relative text-gray-600 body-font">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2612.9334055982536!2d33.402076176477664!3d49.08790577136412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d752ee32d17579%3A0xd43e707aff213461!2z0J_RgNC-0YTRgdC_0ZbQu9C60L7QstCwINCy0YPQu9C40YbRjywgOSwg0JrRgNC10LzQtdC90YfRg9C6LCDQn9C-0LvRgtCw0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMzk2MDA!5e0!3m2!1suk!2sua!4v1703510588077!5m2!1suk!2sua"
            style=""></iframe>
    </div>
    <div class="container flex px-5 py-24 mx-auto">
        <div
            class="relative z-10 flex flex-col w-full p-8 mt-10 bg-white rounded-lg shadow-md lg:w-[760px] md:w-1/2 md:ml-auto md:mt-0">

            <div class="">

                <span class="flex justify-center my-2 text-1.5xl tracking-wide text-center text-gray-500 uppercase">
                    {{ __('Приймальна директора:') }}
                </span>
                <div class="flex flex-row w-full mt-4">

                    <div class="flex flex-col w-1/2 gap-2 ml-2">

                        <div>{{__('Телефон')}}</div>

                        <a href="tel:+380504756847" class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-3xl">
                            +38 (050) 475-68-47
                        </a>
                    </div>
                    <div class="flex flex-col w-1/2 gap-2 ml-2">
                        <div>{{__('Електрона аддреса')}}</div>
                        <div>
                            <a href="mailto:director@himpost.com" class="block text-1.5xl text-gray-900 font-r500 hover:opacity-75 sm:text-3xl">
                                director@himpost.com
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full h-[2px] bg-blue-600"></div>
                <div class="flex flex-row justify-start order-1 my-8">

                    <div class=" text-gray-900 font-r400 text-start text-1.5xl">{{ __('Графік роботи:') }}
                    </div>
                    <div class="ml-4 text-lg"><span class="font-r500 text-1.5xl">{{ __('Пн-Пт:') }} </span> {{
                        __('с
                        8:30 до 17:00') }} <span class="font-r500 text-1.5xl">{{ __('Сб-Нд:') }} </span>{{
                        __('Вихідний') }}</div>
                </div>
                <div class="w-full h-[2px] bg-blue-600"></div>
                <div class="flex flex-col gap-1">
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('Юридична
                            адреса:') }}
                        </div>
                        <div class="text-lg">{{ __('82111, Україна, Львівська область
                            вул. Самбірська, 85, Дрогобич') }} </div>
                    </div>
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('Фактична
                            адреса:') }}
                        </div>
                        <div class="text-lg">{{ __('39603, Україна, Полтавська обл.
                            м. Кременчук,
                            вул. Профспілкова, будинок. 9') }} </div>
                    </div>
                    <div class="order-1 mt-2">
                        <div class="ml-2 text-gray-900 text-start font-r500 text-1.5xl">{{ __('м. Київ
                            (Склад):') }}
                        </div>
                        <div class="text-lg">{{ __('Миколи Хвильового, будинок. 15, мікрорайон Дарницький') }}
                        </div>
                        <div class="flex flex-row justify-start">
                            <div class="text-lg font-r500">{{ __('моб.') }}</div>
                            <div class="ml-2 text-lg">{{ __('+38 (050) 348-23-10') }} </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
</section>
@endsection