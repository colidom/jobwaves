<div>
    <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacancies as $vacancy)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between items-center">
                <div class="space-y-3">
                    <a href="" class="text-xl font-bold hover:text-slate-700">
                        {{ $vacancy->title }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacancy->company_name }}</p>
                    <p class="text-sm text-gray-500">Puedes inscribirte hasta: {{ $vacancy->end_date->format('d/m/Y') }}
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href=""
                        class="bg-slate-800 hover:bg-slate-700 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Candidatos
                    </a>
                    <a href="{{ route('vacancies.edit', $vacancy->id) }}"
                        class="bg-blue-800 hover:bg-blue-700 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Editar
                    </a>
                    <button wire:click="$dispatch('showAlert', { vacancyId: {{ $vacancy->id }} })" type="button"
                        class="bg-red-600 hover:bg-red-500 py-2 px-4 rounded-lg text-white text-sm font-bold
                        uppercase text-center">
                        Eliminar
                    </button>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @this.on('showAlert', vacancyId => {
                Swal.fire({
                    title: '¿Eliminar Vacante?',
                    text: "Una Vacante eliminada no se puede recuperar:(",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // ELiminar vacante
                        @this.call('deleteVacancy', vacancyId);
                        Swal.fire({
                            title: 'Se eliminó la Vacante',
                            text: 'Eliminado correctamente',
                            icon: 'success'
                        });
                    }
                });
            });
        });
    </script>
@endpush
