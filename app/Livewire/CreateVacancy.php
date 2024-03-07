<?php

namespace App\Livewire;

use App\Models\Salario;
use App\Models\Categoria;
use Livewire\Component;

class CreateVacancy extends Component
{
    public $title;
    protected $rules = [
        'title' => 'required|string',
        'salary' => 'required',
        'category' => 'required',
        'company_name' => 'required',
        'end_date' => 'required',
        'job_description' => 'required',
        'image' => 'required'
    ];

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
