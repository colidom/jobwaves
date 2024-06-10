<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-900 leading-tight">
            {{ $vacancy->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:show-vacancy :vacancy='$vacancy' />
            </div>
        </div>
</x-app-layout>
