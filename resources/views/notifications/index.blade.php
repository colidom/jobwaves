<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-900 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-700 dark:text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">
                        Mis notificaciones
                    </h1>

                    @forelse ($notifications as $notification)
                        <div class="p-5 border border-gray-200 lg:flex justify-between lg:items-center">
                            <div>
                                <p>Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notification->data['vacancy_name'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="#"
                                    class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg">Ver
                                    candidatos</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600">¡No existen nuevas notificaciones!</p>
                    @endforelse

                </div>
            </div>
        </div>
</x-app-layout>
