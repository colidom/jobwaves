<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class HomeVacancies extends Component
{
    const ELEMENTS_BY_PAGE = 10;

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
        $vacancies = Vacancy::when($this->term, function ($query) {
            $query->where('title', 'LIKE', '%' . $this->term . "%");
        })->when($this->term, function ($query) {
            $query->orWhere('company_name', 'LIKE', '%' . $this->term . "%");
        })->when($this->category, function ($query) {
            $query->where('category_id', $this->category);
        })->when($this->salary, function ($query) {
            $query->where('salary_id', $this->salary);
        })->paginate(self::ELEMENTS_BY_PAGE);

        return view('livewire.home-vacancies', [
            'vacancies' => $vacancies
        ]);
    }
}
