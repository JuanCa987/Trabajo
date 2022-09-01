<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->text('tipo_documento');
            $table->string('num_documento');
            $table->string('documento_identidad');
            $table->string('pais_expedicion');
            $table->string('deapartamento_expedicion');
            $table->string('municipio_expedicion');
            $table->string('fecha_expedicion');
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('genero');
            $table->string('fecha_nacimiento');
            $table->string('pais_nacimiento');
            $table->string('departamento_nacimiento');
            $table->string('municipio_nacimiento');
            $table->string('estrato');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_cursos');
            $table->timestamps();

            // a continuacion se indica hacia donde apuntan estas foraneas
            $table->foreign('id_municipio')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
