<div>
    <livewire:filter-vacancies />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">
                Nuestras ofertas de empleo disponibles
            </h3>
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacancies as $vacancy)
                    <div class="md:flex md-justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a class="text-3xl font-extrabold text-gray-600"
                                href="{{ route('vacancies.show', $vacancy->id) }}">{{ $vacancy->title }}</a>

                            <p class="text-base text-gray-600 mb-1">{{ $vacancy->company_name }}</p>
                            <p class="font-bold text-xs text-gray-600">Último día para inscribirte:
                                <span class="font-normal">{{ $vacancy->end_date->format('d/m/Y') }}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a class="block text-center px-4 py-2 bg-indigo-600 border
                            border-transparent rounded-md font-semibold text-xs text-white uppercase
                            tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 dark:focus:bg-indigo
                            active:bg-indigo-900 dark:active:bg-indigo-700 focus:outline-none focus:ring-2
                            focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-indigo-200
                            transition ease-in-out duration-150"
                                href="{{ route('vacancies.show', $vacancy->id) }}">Ver
                                oferta de empleo</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">Aún no existen ofertas de empleo.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
