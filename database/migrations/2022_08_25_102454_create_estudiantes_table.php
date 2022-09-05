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
            $table->text('documento_identidad');
            $table->date('fecha_expedicion');
            $table->unsignedBigInteger('municipio_expedicion');
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->text('genero');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('municipio_nacimiento');
            $table->integer('estrato');
            $table->unsignedBigInteger('id_cursos');
            $table->timestamps();

            // a continuacion se indica hacia donde apuntan estas foraneas
            $table->foreign('municipio_expedicion')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('municipio_nacimiento')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
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
