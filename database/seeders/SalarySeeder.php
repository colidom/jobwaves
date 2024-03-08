<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->insert([
            'salary' => '0€ - 19.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '20.000€ - 29.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '30.000€ - 39.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '40.000€ - 49.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '50.000€ - 59.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '60.000€ - 69.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '70.000€ - 79.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '80.000€ - 99.999€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('salaries')->insert([
            'salary' => '+100.000€',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
