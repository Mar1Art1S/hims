<div class="max-w-md py-3 mx-auto">
    <form wire:submit='search'>
        <label for="default-search" class="mb-2 text-sm text-gray-100 sr-only font-r500">{{ __('Пошук') }}</label>

        <div class="relative">
            <x-input type="search" icon="search" id="default-search" placeholder="Пошук..." />

            <x-button type="submit" wire:target='search' wire:loading.attr='disabled'
                class="absolute end-2.5 bottom-2 px-4 py-2 rounded-lg border-none">
                {{ __('Пошук') }}
            </x-button>
        </div>
    </form>
</div>
