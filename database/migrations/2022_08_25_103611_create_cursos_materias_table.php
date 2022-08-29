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
        Schema::create('cursos_materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cursos');
            $table->unsignedBigInteger('id_materias');

            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_materias')->references('id')->on('materias')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_materias');
    }
};
