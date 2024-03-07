<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria' => 'Backend Developer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Frontend Developer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Mobile Developer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Agregar más categorías según sea necesario
        DB::table('categorias')->insert([
            'categoria' => 'Techlead',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'UX / UI Design',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Software Architecture',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'DevOps',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Añadir más categorías
        DB::table('categorias')->insert([
            'categoria' => 'Data Scientist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Network Engineer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
