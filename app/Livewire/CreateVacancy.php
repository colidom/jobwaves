<?php

namespace App\Livewire;

use App\Models\Salario;
use App\Models\Categoria;
use Livewire\Component;

class CreateVacancy extends Component
{
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
