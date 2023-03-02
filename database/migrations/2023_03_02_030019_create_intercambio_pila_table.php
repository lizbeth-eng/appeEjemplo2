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
        Schema::create('intercambio_pila', function (Blueprint $table) {
            $table->increments('idIntercambio');
            $table->string('numeroEstudiante');
            $table->string('observaciones');
            $table->integer('idGrupo')->unsigned();
            $table->foreign('idGrupo')->references('idGrupo')->on('grupos');
            $table->integer('idMateria')->unsigned();
            $table->foreign('idMateria')->references('idMateria')->on('Materias');
            $table->integer('idPais')->unsigned();
            $table->foreign('idPais')->references('idPais')->on('paises');
            $table->integer('idUniversidad')->unsigned();
            $table->foreign('idUniversidad')->references('idUniversidad')->on('universidades');
            $table->integer('idPersonalAcademico')->unsigned();
            $table->foreign('idPersonalAcademico')->references('idPersonalAcademico')->on('personal_academicos');
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
        Schema::dropIfExists('intercambio_pila');
    }
};
