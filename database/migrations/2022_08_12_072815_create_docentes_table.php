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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombres');
            $table->string('apellidos');
            $table->text('titulo_universitario');
            $table->integer('edad');
            $table->date('fecha_contrato');
            $table->text('foto');
            $table->string('doc_identidad');
            $table->unsignedBigInteger('id_cursos');


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
        Schema::dropIfExists('docentes');
    }
};
