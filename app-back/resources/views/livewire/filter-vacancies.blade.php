<div class="bg-gray-200 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-700 text-center font-extrabold my-5">
        {{ 'Buscar y Filtrar Ofertas de empleo' }}
    </h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent='readFormData'>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="term">{{ __('Criterios de Búsqueda') }}
                    </label>
                    <input id="term" type="text" placeholder="Buscar por criterio: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 focus:border-sky-300 focus:ring
                        focus:ring-sky-200 focus:ring-opacity-50 w-full"
                        wire:model="term" />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">{{ 'Categoría' }}</label>
                    <select wire:model="category" class="border-gray-300 p-2 w-full">
                        <option>--Seleccione--</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">{{ 'Salario Mensual' }}</label>
                    <select wire:model="salary" class="border-gray-300 p-2 w-full">
                        <option>-- Seleccione --</option>
                        @foreach ($salaries as $salary)
                            <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input type="submit"
                    class="block text-center px-4 py-2 bg-sky-600 border
                    border-transparent rounded-md font-semibold text-xs text-white uppercase cursor-pointer
                    tracking-widest hover:bg-sky-700 focus:bg-sky-700 dark:focus:bg-sky
                    active:bg-sky-900 dark:active:bg-sky-700 focus:outline-none focus:ring-2
                    focus:ring-sky-500 focus:ring-offset-2 dark:focus:ring-offset-sky-200
                    transition ease-in-out duration-150"
                    value="Buscar" />
            </div>
        </form>
    </div>
</div>
