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
        Schema::create('lista_asistencias', function (Blueprint $table) {
            $table->increments('idListaAsistencia');
            $table->integer('idPersonalAcademico')->unsigned();
            $table->foreign('idPersonalAcademico')->references('idPersonalAcademico')->on('personal_academicos');
            $table->datetime('fecha');
            $table->integer('idCicloEscolar')->unsigned();
            $table->foreign('idCicloEscolar')->references('idCicloEscolar')->on('cicloescolares');
            $table->string('asistencia');
            $table->integer('idActa')->unsigned();
            $table->foreign('idActa')->references('idActa')->on('actas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_asistencias');
    }
};
