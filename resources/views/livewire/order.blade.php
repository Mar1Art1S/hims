<div>
    @session('order-success')
        <div class="text-center">
            <x-lucide-smile class="mx-auto mb-3 size-16" />
            <p>Дякуємо, замовлення успішно надіслано!</p>
            <p>Наш менеджер зв'яжеться з Вами найближчим часом</p>
            <p>Номер Замовлення: <span class="font-bold">№10546</span></p>
            <x-button class="mt-5" @click="modalOpen=false" type="button">{{ __('Закрити') }}</x-button>
        </div>
    @else
        <form wire:submit='save'>
            @unless ($product)
                <div class="grid w-full mt-5 mb-4 lg:grid-cols-3 lg:gap-x-4 gap-y-4">
                    <x-select placeholder="Оберіть категорію" />
                    <x-select placeholder="Оберіть підкатегорію" />
                    <x-select placeholder="Оберіть товар" />
                </div>
            @endunless

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                <div class="space-y-4">
                    <x-input placeholder="Ваше ФІО" wire:model.blur='order.fio' required />
                    @error('order.fio')
                        <x-error>{{ $message }}</x-error>
                    @enderror

                    <x-input placeholder="Пошта або телефон" wire:model='order.contact' required />
                    @error('order.contact')
                        <x-error>{{ $message }}</x-error>
                    @enderror

                    <x-input placeholder="Місто" wire:model='order.city' />
                    @error('order.city')
                        <x-error>{{ $message }}</x-error>
                    @enderror
                </div>

                <div class="mt-4 space-y-4 lg:mt-0">
                    <x-textarea class="h-full" placeholder="Додатковий опис" wire:model='order.description'
                        rows="5" />
                    @error('order.description')
                        <x-error>{{ $message }}</x-error>
                    @enderror
                </div>
            </div>

            <input type="hidden" wire:model='order.product' value="{{ $product }}" />

            <div class="flex flex-col-reverse mt-8 sm:flex-row sm:justify-between gap-y-4">
                <x-button @click="modalOpen=false" type="button">
                    {{ __('Відмінити') }}
                    <x-lucide-ban class="inline-block size-5 ms-1" />
                </x-button>
                <x-button type="submit">
                    {{ __('Купити') }}
                    <x-lucide-shopping-cart class="inline-block size-5 ms-1" />
                </x-button>
            </div>
        </form>
    @endsession
</div>
