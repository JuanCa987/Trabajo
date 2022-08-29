<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

        //relacion uno a muchos
        public function estudiantes(){
            return $this->hasMany(Estudiante::class);
        }

                //relacion uno a muchos
        public function departamentos(){
            return $this->hasMany(Departamento::class);
        }
}
