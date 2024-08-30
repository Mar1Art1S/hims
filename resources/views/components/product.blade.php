@props(['product'])

<x-decor.flip>
    <div class="front w-[400px] h-[400px] lf:w-[370px] lf:h-[370px] tg:w-[350px] tg:h-[350px] fg:w-[320px] fg:h-[320px] md:w-[370px] md:h-[370px]">
        <h2 class="p-3 mb-5 text-2xl font-r700 uppercase text-white text-center"> {{ $product->name }} </h2>
        <div>
            @foreach ($product->options as $options)
                <div class="w-full px-4 flex flex-row items-center mt-4 ">
                    <div class="w-3/4 justify-start text-start text-white text-sm">{{ $options['name'] }}</div>
                    <div class="w-1/4 justify-end text-end text-white text-sm flex-nowrap font-bold">{{ $options['parameter'] }}</div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="back">
        <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
            {{ $product->name }}
        </h4>
        <div class="flex flex-col items-center justify-center mt-5 space-y-3">


            <x-modal title="Замовлення товару" :product="$product">
                <x-slot:button>
                    <x-button @click="modalOpen=true" class="w-40">{{ __('Купити') }}</x-button>
                </x-slot>
                <livewire:order product="{{ $product['name'] }}"/>
            </x-modal>

            <div x-data="{ modalOpen: false }"
                 @keydown.escape.window="modalOpen = false"
                 class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true" class="w-40 inline-block px-12 m-2 py-3 text-sm text-white border border-white rounded bg-blue-800 font-r500
                hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
                    {{ __('TDS') }}</button>
                <template x-teleport="body">
                    <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                        <div x-show="modalOpen"
                             x-transition:enter="ease-out duration-300"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="ease-in duration-300"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                        <div x-show="modalOpen"
                             x-trap.inert.noscroll="modalOpen"
                             x-transition:enter="ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave="ease-in duration-200"
                             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                             class="relative w-[800px] h-[900px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">
                                <h3 class="text-lg font-semibold">ППУ система на основі СКЛАДНОГО ПОЛІЕФІРУ ПоліХім-2002 Р-7</h3>
                                <div class="mr-12">
                                    <a href="{{ asset('storage/' . $product->tds_file) }}"><x-button class="w-40  bg-blue-800 hover:bg-gray-500">{{ __('скачати') }}</x-button></a>
                                </div>

                                <button @click="modalOpen=false" class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                            </div>
                            <div class="relative w-auto">
                                <div class="">
                                        <div class="tds-card item-page" itemscope itemtype="https://schema.org/Article">
                                            <meta itemprop="inLanguage" content="ru-RU"/>
                                                <p><strong>Характеристика и область применения:</strong></p>
                                                <p><span class="grey-text-accent">ПолиХим-2002 Р-7 (компонент А)</span> представляет собой
                                                    сложный насыщенный полиэфир на терефталевой основе, содержащий в своем составе катализаторы,
                                                    регуляторы пены и антипирены. <b>Полиэфир в своей рецептуре не содержит фреон, в качестве
                                                        химического вспенивателя используется вода.</b></p>
                                                <p>&nbsp;</p>
                                                <p><span class="grey-text-accent">Изоцианат PMDI (компонент Б)</span> - смесь на основе
                                                    полимерного МДИ, дифенилметан-диизоцианата с содержанием высокофункциональных изоцианатов.
                                                </p>
                                                <p>Двухкомпонентная ППУ система на основе ПолиХим-2002 Р-7 применяется для получения жесткого
                                                    пенополиуретана методом напыления (теплоизоляция для промышленных и жилых объектов,
                                                    трубопроводов, емкостей, теплоизоляция крыш).</p>
                                                <p>Пенополиуретан, образующийся на основе данного полиэфира, обладает очень низким коэффициентом
                                                    теплопроводности, экологически безопасен, долговечен, характеризуется низким
                                                    водопоглощением, хорошей механической прочностью.&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p><b>Технологические рекомендации:</b></p>
                                                <p>- температура окружающего воздуха - (15-35)<sup>0</sup>С</p>
                                                <p>- относительная влажность воздуха – (65±5)<sup>0</sup>С&nbsp;</p>
                                                <p>- температура компонента А –(40-60)<sup>0</sup>С&nbsp;</p>
                                                <p>- температура компонента Б –(35-50)<sup>0</sup>С&nbsp;</p>
                                                <p>- температура подложки – не менее 15<sup>0</sup>С&nbsp;</p>
                                                <p>- состояние подложки – сухая и чистая</p>
                                                <p>&nbsp;</p>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <td>Рекомендуемый состав (соотношение)</td>
                                                            <td>Массовое</td>
                                                            <td>Объемное</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Компонент А (полиол): ПолиХим-2002 Р-7</td>
                                                            <td>100</td>
                                                            <td>100</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Компонент Б (изоцианат): PMDI</td>
                                                            <td>103</td>
                                                            <td>100</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p>&nbsp;</p>
                                                <p><b>Технические характеристики ПолиХим-2002 Р-7</b></p>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>Наименование показателя</td>
                                                        <td>Значение</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Время старта, при температуре (20±1)°С с, в пределах &nbsp;</td>
                                                        <td>2-5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Кажущаяся плотность при свободном вспенивании, кг/м<sup>3</sup>, в пределах</td>
                                                        <td>34,0-41,0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Плотность, г/см<sup>3</sup>, в пределах</td>
                                                        <td>1,190-1,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Кажущаяся вязкость по вискозиметру Брукфильда при температуре (20±0,5)°С
                                                            (3S/20об/мин), мПа·с, в пределах
                                                        </td>
                                                        <td>1400-2400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Гидроксильное число, мг КОН/г, в пределах</td>
                                                        <td>200-270</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>&nbsp;</p>
                                                <p><b>Технические характеристики РМDI</b></p>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Наименование показателя</p>
                                                        </td>
                                                        <td>
                                                            <p>РМDI</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Вязкость при температуре 25°С, мПа·с, в пределах</p>
                                                        </td>
                                                        <td>
                                                            <p>150-250</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Плотность при температуре 25°С, г/см<sup>3</sup>, в пределах</p>
                                                        </td>
                                                        <td>
                                                            <p>1,22-1,25</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Содержание изоцианатных групп, %, в пределах</p>
                                                        </td>
                                                        <td>
                                                            <p>30,5-32,0</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Кислотность по HCl, %</p>
                                                        </td>
                                                        <td>
                                                            <p>0,05</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>&nbsp;</p>
                                                <p><strong>Характеристики теплоизоляции на основе ПолиХим-2002 Р-7</strong></p>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Наименование показателя</p>
                                                        </td>
                                                        <td>
                                                            <p>Значение</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Плотность тепловой изоляции, кг/м<sup>3</sup>, в пределах</p>
                                                        </td>
                                                        <td>
                                                            <p>&gt;50±2</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Объемное водопоглощенение, % , не более&nbsp;</p>
                                                        </td>
                                                        <td>
                                                            <p>2,0</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Теплопроводность, Вт/(м·К), не более</p>
                                                        </td>
                                                        <td>
                                                            <p>0,028</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Прочность на сжатие при 10%-ной деформации, МПа, не менее</p>
                                                        </td>
                                                        <td>
                                                            <p>0,22</p>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>&nbsp;</p>
                                                <p><strong>Транспортирование и хранение:</strong></p>
                                                <p>Полиэфир должен храниться в герметично закрытой таре при оптимальной температуре от плюс
                                                    5<sup>0</sup>С. Верхний предел не регламентируется.&nbsp;</p>
                                                <p>Гарантийный срок хранения – 3 месяца со дня изготовления.&nbsp;В течение 2021 года технология
                                                    будет усовершенствована и срок хранения будет доведен минимум до 6 месяцев.</p>
                                                <p>&nbsp;</p>
                                                <div class="video-responsive">
                                                    <iframe class="embed-responsive-item" width="560" height="315"
                                                            src="https://www.youtube.com/embed/VHqhn12bUc0" title="YouTube video player"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen="allowfullscreen"></iframe>
                                                </div>
                                                <p>&nbsp;</p></div>


                                        </div>
                                        <div class="moduletable">


                                            <div class="custom">
                                                <hr style="border-top: 1px solid #dadada;"/>


                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</x-decor.flip>


