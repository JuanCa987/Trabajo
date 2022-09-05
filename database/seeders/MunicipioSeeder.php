<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create([
            'id'=>1,
            'nombre'=>'Medellin',
            'id_departamento'=>1
        ]);

        Municipio::create([
            'id'=>2,
            'nombre'=>'Pereira',
            'id_departamento'=>2
        ]);
        Municipio::create([
            'id'=>3,
            'nombre'=>'Dosquebradas',
            'id_departamento'=>2
        ]);
        Municipio::create([
            'id'=>4,
            'nombre'=>'Villeta',
            'id_departamento'=>3
        ]);
    }
}
