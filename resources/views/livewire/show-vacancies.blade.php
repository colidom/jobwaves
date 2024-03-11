<div>
    <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacancies as $vacancy)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between items-center">
                <div class="space-y-3">
                    <a href="" class="text-xl font-bold">
                        {{ $vacancy->title }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacancy->company_name }}</p>
                    <p class="text-sm text-gray-500">Puedes inscribirte hasta: {{ $vacancy->end_date->format('d/m/Y') }}
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href=""
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Candidatos
                    </a>
                    <a href=""
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Editar
                    </a>
                    <a href=""
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Eliminar
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar.</p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $vacancies->links() }}
    </div>
</div>
