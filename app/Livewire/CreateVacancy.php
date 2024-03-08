<?php

namespace App\Livewire;

use App\Models\Salary;
use App\Models\Vacancy;
use Livewire\Component;
use App\Models\Category;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateVacancy extends Component
{
    public $title;
    public $salary;
    public $category;
    public $company_name;
    public $end_date;
    public $job_description;
    public $image;

    use WithFileUploads;

    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company_name' => 'required',
        'end_date' => 'required',
        'job_description' => 'required',
        'image' => 'required|image|max:2048'
    ];

    protected $messages = [
        'title.required' => 'El campo título es requerido.',
        'title.string' => 'El campo título debe ser una cadena de texto.',
        'salary.required' => 'El campo salario es requerido.',
        'category.required' => 'El campo categoría es requerido.',
        'company_name.required' => 'El campo nombre de la empresa es requerido.',
        'end_date.required' => 'El campo fecha de finalización es requerido.',
        'job_description.required' => 'El campo descripción del trabajo es requerido.',
        'image.required' => 'El campo imagen es requerido.',
    ];

    public function createVacancy()
    {
        $data = $this->validate();

        // Almacenar la imagen
        $image = $this->image->store('public/vacancies');
        $data['image'] = str_replace('public/vacancies/', '', $image);

        // Crear vacante
        Vacancy::create([
            'title' => $data['title'],
            'salary_id' => $data['salary'],
            'category_id' => $data['category'],
            'company_name' => $data['company_name'],
            'end_date' => $data['end_date'],
            'job_description' => $data['job_description'],
            'image' => $data['image'],
            'user_id' => auth()->user()->id
        ]);

        // Crear mensaje


        // Redireccionar usuario
    }

    public function render()
    {
        // Consultar DB
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.create-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
