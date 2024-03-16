<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacancy->title }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-100 p-4 my-10 rounded-3xl">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa:
                <span class="normal-case font-normal">{{ $vacancy->company_name }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Último día para inscribirse:
                <span class="normal-case font-normal">{{ $vacancy->end_date->toFormattedDateString() }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoría:
                <span class="normal-case font-normal">{{ $vacancy->category_id }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario:
                <span class="normal-case font-normal">{{ $vacancy->salary_id }}</span>
            </p>
        </div>
    </div>
</div>
