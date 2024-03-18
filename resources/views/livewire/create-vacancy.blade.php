<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='createVacancy'>
    <!-- Título -->
    <div>
        <x-input-label for="title" :value="__('Título')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')"
            placeholder="Título de la vacante" />

        @error('title')
            <livewire:show-alert :message="$message" />
        @enderror

    </div>

    <!-- Salario -->
    <div>
        <x-input-label for="salary" :value="__('Rango salarial (anual)')" />
        <select wire:model="salary" id="salary"
            class="border-gray-300 mt-1 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-700 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
            @endforeach
        </select>
        @error('salary')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <!-- Categoría -->
    <div>
        <x-input-label for="category" :value="__('Categoría')" />
        <select wire:model="category" id="category"
            class="border-gray-300 mt-1 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-700 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
            <option>-- Seleccione --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>
        @error('category')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <!-- Nombre empresa -->
    <div>
        <x-input-label for="company_wire:model" :value="__('Empresa')" />
        <x-text-input id="company_name" class="block mt-1 w-full" type="text" wire:model="company_name"
            :value="old('company_name')" placeholder="Nombre de la empresa" />
        @error('company_name')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <!-- Último día -->
    <div>
        <x-input-label for="end_date" :value="__('Último día para inscribirse')" />
        <x-text-input id="end_date" class="block mt-1 w-full" type="date" wire:model="end_date"
            :value="old('end_date')" />
        @error('end_date')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <!-- Descripción -->
    <div>
        <x-input-label for="job_description" :value="__('Descripción')" />
        <textarea id="job_description"
            class="border-gray-300 mt-1 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-700 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full h-72"
            type="text" wire:model="job_description" :value="old('job_description')"
            placeholder="Descripción general del puesto de trabajo"></textarea>
        @error('job_description')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <!-- Imagen -->
    <div>
        <x-input-label for="image" :value="__('Imagen')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" wire:model="image" accept="image/*" />

        <div class="my-5 w-80">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="Imagen subida">
            @endif
        </div>

        @error('image')
            <livewire:show-alert :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">Crear puesto</x-primary-button>
</form>
