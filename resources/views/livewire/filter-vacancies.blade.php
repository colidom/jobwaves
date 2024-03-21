<div class="bg-gray-200 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-700 text-center font-extrabold my-5">Buscar y Filtrar Ofertas de empleo
    </h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent='readFormData'>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold " for="term">Término de
                        Búsqueda
                    </label>
                    <input id="term" type="text" placeholder="Buscar por Término: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                        focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="term" />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Categoría</label>
                    <select wire:model="category" class="border-gray-300 p-2 w-full">
                        <option>--Seleccione--</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Salario Mensual</label>
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
                    class="block text-center px-4 py-2 bg-indigo-600 border
                    border-transparent rounded-md font-semibold text-xs text-white uppercase cursor-pointer
                    tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 dark:focus:bg-indigo
                    active:bg-indigo-900 dark:active:bg-indigo-700 focus:outline-none focus:ring-2
                    focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-indigo-200
                    transition ease-in-out duration-150"
                    value="Buscar" />
            </div>
        </form>
    </div>
</div>
