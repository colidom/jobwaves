<?php

namespace App\Livewire;

use App\Models\Salario;
use App\Models\Categoria;
use Livewire\Component;
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
        'image' => 'required|image|max:1024'
    ];

    public function createVacancy()
    {
        $data = $this->validate();
    }

    public function render()
    {
        // Consultar DB
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.create-vacancy', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
