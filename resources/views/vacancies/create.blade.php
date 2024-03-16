<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-900 leading-tight">
            {{ __('Crear Vacante') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700 dark:text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">
                        Publicar Vacante
                    </h1>
                    <div class="md:flex md:justify-center p-5">
                        <livewire:create-vacancy />
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
