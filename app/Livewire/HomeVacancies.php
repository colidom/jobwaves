<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    public $term;
    public $category;
    public $salary;

    // Conecta el FilterVacancies component con HomeVacancies component
    protected $listeners = ['searchTerms' => 'search'];

    public function search($term, $category, $salary)
    {
        $this->term = $term;
        $this->category = $category;
        $this->salary = $salary;
    }

    public function render()
    {
        $vacancies = Vacancy::all();

        return view('livewire.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
