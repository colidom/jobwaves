<x-app-layout>
    <div class="py-16 bg-gray-100 overflow-hidden lg:py-24">
        <div class=" max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-sky-600 sm:text-6xl">
                    {{ __('Encuentra un empleo en el sector IT') }}</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                    {{ __('Encuentra la oportunidad profesional de tus sueños en una destacada empresa del sector de Tecnologías de la Información (IT).') }}
                </p>
                <p class="mt-4 max-w-1xl mx-auto text-center text-l text-gray-500">
                    {{ __('¡Explora nuestras vacantes disponibles para roles de desarrollador front-end, back-end, DevOps, móvil y mucho más!') }}
                </p>
            </div>
        </div>
    </div>

    <livewire:home-vacancies />

</x-app-layout>
