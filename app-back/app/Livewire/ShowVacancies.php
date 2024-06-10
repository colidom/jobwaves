<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class ShowVacancies extends Component
{
    // Definir la constante a nivel de clase
    const ELEMENTS_BY_PAGE = 10;

    protected $listeners = ['deleteVacancy'];

    public function deleteVacancy(Vacancy $vacancy)
    {
        $vacancy->delete();
    }

    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)->paginate(self::ELEMENTS_BY_PAGE);

        return view('livewire.show-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
