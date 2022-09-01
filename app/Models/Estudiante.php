<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['tipo_documento', 'num_documento', 'documento_identidad', 'pais_expedicion',
    'deapartamento_expedicion', 'municipio_expedicion', 'fecha_expedicion','nombre','primer_apellido',
    'segundo_apellido','genero','fecha_nacimiento','pais_nacimiento','departamento_nacimiento','municipio_nacimiento',
    'estrato'];
    use HasFactory;

        //relacion uno a muchos
        public function municipios(){
            return $this->hasMany(Municipio::class);
        }

                //relacion uno a muchos
        public function cursos(){
            return $this->hasMany(Curso::class);
        }
}
