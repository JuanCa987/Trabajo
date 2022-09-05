<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\PaisesSeeder;
use Illuminate\Database\seeders\DepartamentoSeeder;
use Illuminate\Database\seeders\MunicipioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PaisesSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class
        ]);
    }
}
