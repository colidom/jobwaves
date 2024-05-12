<x-app-layout>
    <div class="py-16 bg-gray-100 overflow-hidden lg:py-24">
        <div class=" max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-sky-600 sm:text-6xl">
                    {{ __('Encuentra empleo en Tecnología de la Información') }}</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">
                    {{ __('¿Has completado tu formación en Tecnología de la Información (IT) y buscas oportunidades laborales en este campo?') }}
                </p>
                <p class="mt-4 max-w-1xl mx-auto text-center text-l text-gray-500">
                    {{ __('¡Estamos aquí para ayudarte! Explora las numerosas vacantes ofrecidas por nuestras empresas colaboradoras, para roles como desarrollador front-end, back-end, DevOps, desarrollo móvil ¡y mucho más!') }}
                </p>
            </div>
        </div>
    </div>

    <livewire:home-vacancies />

</x-app-layout>
