<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salarios')->insert([
            'salario' => '0€ - 19.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '20.000€ - 29.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '30.000€ - 39.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '40.000€ - 49.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '50.000€ - 59.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '60.000€ - 69.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '70.000€ - 79.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '80.000€ - 99.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salarios')->insert([
            'salario' => '+100.000€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
