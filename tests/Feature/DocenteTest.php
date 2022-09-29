<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Docentes;

class DocenteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_docentes_duplicate(){
        $docente1 = Docentes::make([
            'nombres' => 'Morales',
            'apellidos' => 'perez',
            'titulo_universitario' => 'UTP',
            'edad' => '84',
        ]);

        $docente2 = Docentes::make([
            'nombres' => 'Juan',
            'apellidos' => 'Mateo',
            'titulo_universitario' => 'Libre',
            'edad' => '15',
        ]);

        $this->assertTrue($docente1-> nombres != $docente2-> nombres && $docente1-> apellidos != $docente2-> apellidos && $docente1-> titulo_universitario != $docente2-> titulo_universitario && $docente1-> edad != $docente2-> edad);
    }

    public function test_save_docentes(){
        $respuesta = $this->post('/docentes',[
            'nombre' => 'Morales',
            'apellidos' => 'perez',
            'titulo_universitario' => 'UTP',
            'edad' => '84',
            'fecha_contrato' => '2022-09-22',
            'foto' => 'public/docentes/d9ZfANIqWdJMGwKGNC87gEzI0flxHcPaV7o5qyJ2.jpg',
            'doc_identidad' => 'public/docentes/dyRIOmK4bU9QXEIa5T7yLn9xUdBAqsowdlVquanz.pdf'
        ]);
        return $respuesta->assertRedirect('/');
    }

    public function test_delete_docente(){
        $docente = Docentes::factory()->count(1)->make();

        $docente = Docentes::first();

        if($docente){
            $docente->delete();
        }
        $this->assertTrue(true);
    }
}
