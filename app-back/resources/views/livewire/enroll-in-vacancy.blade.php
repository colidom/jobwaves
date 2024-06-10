<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">{{ __('Inscribirse en esta oferta de empleo') }}</h3>

    @if (session()->has('message'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm rounded-lg">
            {{ session('message') }}
        </p>
    @else
        <form wire:submit.prevent='enrrollUser' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Currículum vitae (PDF)')" />
                <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" wire:model="cv" />
            </div>

            @error('cv')
                <livewire:show-alert :message="$message" />
            @enderror

            <x-primary-button class="w-full justify-center mt-5">
                {{ __('Inscribirse') }}
            </x-primary-button>
        </form>
    @endif

</div>
