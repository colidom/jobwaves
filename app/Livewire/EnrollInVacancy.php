<?php

namespace App\Livewire;

use App\Models\Vacancy;
use App\Notifications\NewCandidate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnrollInVacancy extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacancy;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    public function enrrollUser()
    {
        $data = $this->validate();

        // Almacenar el cv
        $cv = $this->cv->store('public/cv');
        $data['cv'] = str_replace('public/cv/', '', $cv);

        // Crear la inscripción en oferta de empleo
        $this->vacancy->candidates()->create([
            'user_id' => auth()->user()->id,
            'cv'     => $data['cv']
        ]);

        // Crear notificación y enviar el email
        $this->vacancy->recruiter->notify(new NewCandidate($this->vacancy->id, $this->vacancy->title, auth()->user()->id));

        // Mostrar al usuario mensaje de OK
        session()->flash('message', '¡Hemos recibido su CV correctamente!');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.enroll-in-vacancy');
    }
}
