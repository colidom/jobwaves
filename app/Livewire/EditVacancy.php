<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Salary;
use App\Models\Vacancy;
use Livewire\Component;

class EditVacancy extends Component
{
    public $title;
    public $salary;
    public $category_id;
    public $company_name;
    public $end_date;
    public $description;
    public $image;

    public function mount(Vacancy $vacancy)
    {
        $this->title = $vacancy->title;
        $this->salary = $vacancy->salary;
        $this->category_id = $vacancy->category_id;
        $this->company_name = $vacancy->company_name;
        $this->end_date = $vacancy->end_date;
        $this->description = $vacancy->description;
        $this->image = $vacancy->image;
    }

    public function render()
    {
        $salaries = Salary::all();
        $categories = Category::all();

        return view('livewire.edit-vacancy', [
            'salaries' => $salaries,
            'categories' => $categories

        ]);
    }
}
