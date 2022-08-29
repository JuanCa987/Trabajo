<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

        //relacion uno a muchos
        public function docentes(){
            return $this->hasMany(Docente::class);
        }
}
