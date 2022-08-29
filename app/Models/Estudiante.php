<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
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
