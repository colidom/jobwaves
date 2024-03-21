<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    public function render()
    {
        $vacancies = Vacancy::all();

        return view('livewire.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
