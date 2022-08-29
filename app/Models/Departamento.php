<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

        //relacion uno a muchos
        public function paises(){
            return $this->belongsTo(Pais::class);
        }

        public function municipios(){
            return $this->hasMany(Municipio::class);
        }
}
