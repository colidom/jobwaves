<?php

namespace App\Livewire;

use Livewire\Component;

class EnrollInVacancy extends Component
{
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function enrrollUser()
    {
        $this->validate();

        // Almacenar cv en disco duro

        // Crear la inscripción en oferta de empleo

        // Crear notificación y enviar el email

        // Mostrar al usuario mensaje de OK
    }

    public function render()
    {
        return view('livewire.enroll-in-vacancy');
    }
}
