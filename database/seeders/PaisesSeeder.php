<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paises::create([
            'id'=>1,
            'nombre'=>'Colombia',
        ]);

        Paises::create([
            'id'=>2,
            'nombre'=>'Venezuela',
        ]);
    }
}
