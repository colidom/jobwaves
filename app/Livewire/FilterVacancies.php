<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Salary;
use Livewire\Component;

class FilterVacancies extends Component
{
    public $term;
    public $category;
    public $salary;

    public function readFormData()
    {
        dd("buscando");
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.filter-vacancies', [
            'salaries' => $salaries,
            'categories' => $categories
        ]);
    }
}
