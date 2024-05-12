<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacancy->title }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-100 p-4 my-10 rounded-3xl">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">{{ __('Empresa:') }}
                <span class="normal-case font-normal">{{ $vacancy->company_name }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">{{ __('Último día para inscribirse:') }}
                <span class="normal-case font-normal">{{ $vacancy->end_date->locale('es')->isoFormat('LL') }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">{{ __('Categoría:') }}
                <span class="normal-case font-normal">{{ $vacancy->category->category }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">{{ __('Salario:') }}
                <span class="normal-case font-normal">{{ $vacancy->salary->salary }}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="rounded-3xl" src="{{ asset('storage/vacancies/' . $vacancy->image) }}"
                alt="{{ 'Imagen oferta de empleo' . $vacancy->title }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">{{ __('Descripción: ') }}</h2>
            <p>{{ $vacancy->job_description }}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-100 border border-dashed p-5 text-center">
            <p>
                {{ __('¿Deseas aplicar a esta oferta de empleo?') }}
                <a class="font-bold text-cyan-600"
                    href="{{ route('register') }}">{{ __('¡Regístrate ahora para poder inscribirte en esta oferta de empleo!') }}</a>
            </p>
        </div>
    @else
        @cannot('create', App\Models\Vacancy::class)
            <livewire:enroll-in-vacancy :vacancy="$vacancy" />
        @endcannot
    @endguest
</div>
