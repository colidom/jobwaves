<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CreateVacancy extends Component
{
    public function render()
    {
        // Consultar DB
        $salarios = Salario::all();

        return view('livewire.create-vacancy', [
            'salarios' => $salarios
        ]);
    }
}
