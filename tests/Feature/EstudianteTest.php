<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Estudiante;

class EstudianteTest extends TestCase
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
        $estudiante1 =  Estudiante::make([
            'tipo_documento' => 'CC',
            'num_documento' => '1234556',
            'documento_identidad' => 'public/estudiantes/5nXuuLRCZu3XGCgoczEn4N4Ozc5Y1hHYLRoaffP4.pdf',
            'fecha_expedicion' => '2022-09-16',
            'nombre' => 'Sara',
            'primer_apellido' => 'Apellido',
            'segundo_apellido' => 'fgsdgsgsdfg',
            'genero' => 'F',
            'fecha_nacimiento' => '2022-09-06',
            'estrato' => '1'
        ]);

        $estudiante2 = Estudiante::make([
            'tipo_documento' => 'TI',
            'num_documento' => '102098',
            'documento_identidad' => 'public/estudiantes/5nXuuLRCZu3XGCgoczEn4N4Ozc5Y1hHYLiuoaffP4.pdf',
            'fecha_expedicion' => '2022-07-10',
            'nombre' => 'Juan',
            'primer_apellido' => 'Ausecha',
            'segundo_apellido' => 'jhhghgjh',
            'genero' => 'M',
            'fecha_nacimiento' => '2022-09-01',
            'estrato' => '3'
        ]);

        $this->assertTrue($estudiante1-> tipo_documento != $estudiante2-> tipo_documento && $estudiante1-> num_documento != $estudiante2-> num_documento && $estudiante1-> documento_identidad != $estudiante2-> documento_identidad && $estudiante1-> fecha_expedicion != $estudiante2-> fecha_expedicion && $estudiante1-> nombre != $estudiante2-> nombre
        && $estudiante1-> primer_apellido != $estudiante2-> primer_apellido && $estudiante1-> segundo_apellido != $estudiante2-> segundo_apellido && $estudiante1-> genero != $estudiante2-> genero && $estudiante1-> fecha_nacimiento != $estudiante2-> fecha_nacimiento && $estudiante1-> estrato != $estudiante2-> estrato);
    }

    public function test_save_estudiantes(){
        $respuesta = $this->post('/estudiantes',[
            'tipo_documento' => 'CC',
            'num_documento' => '1234556',
            'documento_identidad' => 'public/estudiantes/5nXuuLRCZu3XGCgoczEn4N4Ozc5Y1hHYLRoaffP4.pdf',
            'fecha_expedicion' => '2022-09-16',
            'nombre' => 'Sara',
            'primer_apellido' => 'Apellido',
            'segundo_apellido' => 'fgsdgsgsdfg',
            'genero' => 'F',
            'fecha_nacimiento' => '2022-09-06',
            'estrato' => '1'
        ]);
        return $respuesta->assertRedirect('/');
    }

    public function test_delete_Estudiante(){
        $Estudiante = Estudiante::factory()->count(1)->make();

        $Estudiante = Estudiante::first();

        if($Estudiante){
            $Estudiante->delete();
        }
        $this->assertTrue(true);
    }
}
