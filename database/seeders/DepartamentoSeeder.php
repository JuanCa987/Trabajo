<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'id'=>1,
            'nombre'=>'Antioquia',
            'id_pais'=>1
        ]);

        Departamento::create([
            'id'=>2,
            'nombre'=>'Risaralda',
            'id_pais'=>1
        ]);

        Departamento::create([
            'id'=>3,
            'nombre'=>'Aragua',
            'id_pais'=>2
        ]);

        Departamento::create([
            'id'=>4,
            'nombre'=>'Carabobo',
            'id_pais'=>2
        ]);
    }
}
