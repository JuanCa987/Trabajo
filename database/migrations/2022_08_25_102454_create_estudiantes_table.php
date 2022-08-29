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
            $table->integer('num_documento');
            $table->string('documento_identidad');
            $table->string('pais_expedicion');
            $table->string('deapartamento_expedicion');
            $table->string('municipio_expedicion');
            $table->date('fecha_expedicion');
            $table->text('nombre');
            $table->text('primer_apellido');
            $table->text('segundo_apellido');
            $table->text('genero');
            $table->date('fecha_nacimiento');
            $table->string('pais_nacimiento');
            $table->string('departamento_nacimiento');
            $table->string('municipio_nacimiento');
            $table->integer('estrato');
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
