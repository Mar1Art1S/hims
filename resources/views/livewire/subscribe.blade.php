<div class="bg-gray-200">
    @session('subscribe-success')
        <div class="p-4 md:p-12 lg:px-16 lg:py-16">
            <div class="flex flex-col justify-center w-full text-center">
                <x-lucide-smile class="mx-auto mb-5 text-amber-500 size-20" />
                <span class="text-xl text-gray-800 font-r700">Дякуємо</span>
                <span class="text-xl text-gray-800 font-r700">
                    Підписка успішно оформлена
                </span>
            </div>
        </div>
    @else
        <div class="py-16">
            <div class="w-full mb-8 text-center">
                <h2 class="text-4xl leading-10 text-gray-900 font-r700 md:text-3xl">
                    {{ __('Підпишіться на наші новини') }}
                </h2>
            </div>

            <div class="max-w-xl mx-auto mt-4">
                <form wire:submit='save' class="sm:flex sm:gap-4 sm:flex-col">
                    <div class="sm:flex-1">
                        <label class="sr-only">Email</label>
                        <x-input placeholder="Вкажіть Email" wire:model='form.email' />

                        @error('form.email')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <x-button type="submit" class="w-full mt-3 border-none lg:mt-0" wire:target='save'
                        wire:loading.attr='disabled'>
                        <span class="text-sm font-r500">{{ __('Підписатися') }}</span>
                        <x-lucide-move-right class="inline-block size-6 ms-2" wire:loading.class='hidden' />
                    </x-button>
                </form>
            </div>
        </div>
    @endsession
</div>
