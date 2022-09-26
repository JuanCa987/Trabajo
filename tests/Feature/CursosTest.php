<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\curso;


class CursosTest extends TestCase
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

    public function test_cursos_duplicate(){
        $curso1 = Curso::make([
            'duracion' => '1',
            'descripcion' => 'Ciencias duras'
        ]);

        $curso2 = Curso::make([
            'duracion' => '2',
            'descripcion' => 'Car'
        ]);

        $this->assertTrue($curso1-> duracion != $curso2-> duracion && $curso1-> descripcion != $curso2-> descripcion );
    }

    public function test_save_cursos(){
        $respuesta = $this->post('/cursos',[
            'name' => 'Test',
            'descripcion' => 'Ciencias duras',
            'duracion' => '6',
            'imagen' => 'public/cursos/fMHs4jaT4mSkhEjsJefswMwGXVt4fxtUEDrMtD9p.jpg'
        ]);
        return $respuesta->assertRedirect('/');
    }

}
