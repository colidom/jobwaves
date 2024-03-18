<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacancy;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditVacancy extends Component
{
    public $vacancy_id;
    public $title;
    public $salary;
    public $category;
    public $company_name;
    public $end_date;
    public $job_description;
    public $image;
    public $new_image;

    use WithFileUploads;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company_name' => 'required',
        'end_date' => 'required',
        'job_description' => 'required',
        'new_image' => 'nullable|image|max:2048'
    ];

    // Muestra los datos en el formulario de la instancia Vacancy
    public function mount(Vacancy $vacancy)
    {
        $this->vacancy_id = $vacancy->id;
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary_id;
        $this->category = $vacancy->category_id;
        $this->company_name = $vacancy->company_name;
        $this->end_date = Carbon::parse($vacancy->end_date)->format('Y-m-d');
        $this->job_description = $vacancy->job_description;
        $this->image = $vacancy->image;
    }

    public function editVacancy()
    {
        $data = $this->validate();
        $vacancy = Vacancy::find($this->vacancy_id);

        // Revisar si hay una nueva imagen
        if ($this->new_image) {
            $image = $this->new_image->store('public/vacancies');
            $data['image'] =  str_replace('public/vacancies/', '', $image);
            // Eliminamos la imagen
            Storage::delete('public/vacancies/' . $vacancy->image);
        }

        // Encontrar oferta de empleo a editar
        $vacancy = Vacancy::Find($this->vacancy_id);

        // Asignar los valores
        $vacancy->title = $data['title'];
        $vacancy->salary_id = $data['salary'];
        $vacancy->category_id = $data['category'];
        $vacancy->company_name = $data['company_name'];
        $vacancy->end_date = $data['end_date'];
        $vacancy->job_description = $data['job_description'];
        $vacancy->image = $data['image'] ?? $vacancy->image;

        // Guardar la oferta de empleo
        $vacancy->save();

        // Crear mensaje
        session()->flash('message', 'Oferta de trabajo actualizada correctamente');

        // Redireccionar
        return redirect()->route('vacancies.index');
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.edit-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories

        ]);
    }
}
