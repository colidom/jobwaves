<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Vacancy::class); // Previene el acceso a todo lo relacionado con este modelo
        return view('vacancies.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Vacancy::class); // Previene el acceso a todo lo relacionao con este modelo
        return view('vacancies.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('vacancies.show', [
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {

        $this->authorize('update', $vacancy);

        return view('vacancies.edit', [
            'vacancy' => $vacancy
        ]);
    }
}
