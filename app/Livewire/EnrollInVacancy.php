<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EnrollInVacancy extends Component
{
    use WithFileUploads;
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function enrrollUser()
    {
        $data = $this->validate();

        // Almacenar el cv
        $cv = $this->cv->store('public/cv');
        $data['cv'] = str_replace('public/cv/', '', $cv);

        // Crear la inscripción en oferta de empleo

        // Crear notificación y enviar el email

        // Mostrar al usuario mensaje de OK
    }

    public function render()
    {
        return view('livewire.enroll-in-vacancy');
    }
}
