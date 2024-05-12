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
                        {{ __('Mis notificaciones') }}
                    </h1>

                    @forelse ($notifications as $notification)
                        <div class="p-5 border border-gray-200 lg:flex justify-between lg:items-center">
                            <div>
                                <p>{{ __('Tienes un nuevo candidato en:') }}
                                    <span class="font-bold">{{ $notification->data['vacancy_name'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="#"
                                    class="block text-center px-4 py-2 bg-cyan-600 border
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase
                                    tracking-widest hover:bg-cyan-700 focus:bg-cyan-700 dark:focus:bg-cyan
                                    active:bg-cyan-900 dark:active:bg-cyan-700 focus:outline-none focus:ring-2
                                    focus:ring-cyan-500 focus:ring-offset-2 dark:focus:ring-offset-cyan-200
                                    transition ease-in-out duration-150">
                                    {{ __('Ver candidatos') }}
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600">{{ __('¡No existen nuevas notificaciones!') }}</p>
                    @endforelse

                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white dark:bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                @if (!$notificationsHistory->isEmpty())
                    <div class="p-6 text-gray-700 dark:text-gray-900">
                        <h1 class="text-2xl font-bold text-center my-10">
                            {{ __('Notificaciones anteriores') }}
                        </h1>
                @endif

                <div class="divide-y divide-gray-200">
                    @forelse ($notificationsHistory as $notification)
                        <div class="p-5 text-gray-400 lg:flex justify-between lg:items-center">
                            <div>
                                <p>
                                    {{ __('Tienes un nuevo candidato en:') }}
                                    <span class="font-bold">{{ $notification->data['vacancy_name'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="{{ route('candidates.index', $notification->data['vacancy_id']) }}"
                                    class="block text-center px-4 py-2 bg-cyan-400 border
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase
                                    tracking-widest hover:bg-cyan-700 focus:bg-cyan-700 dark:focus:bg-cyan
                                    active:bg-cyan-900 dark:active:bg-cyan-700 focus:outline-none focus:ring-2
                                    focus:ring-cyan-500 focus:ring-offset-2 dark:focus:ring-offset-cyan-200
                                    transition ease-in-out duration-150">
                                    {{ __('Ver candidatos') }}
                                </a>
                            </div>
                        </div>
                    @empty
                        {{-- No mostramos nada si no existen notificaciones históricas --}}
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
