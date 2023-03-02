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
        Schema::create('servicio_transacionales', function (Blueprint $table) {
            $table->increments('idServicioTransacional');
            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos');
            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('idProyecto')->on('proyectos');
            $table->integer('idPersonalAcademico')->unsigned();
            $table->foreign('idPersonalAcademico')->references('idPersonalAcademico')->on('personal_academicos');
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresas');
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
        Schema::dropIfExists('servicio_transacionales');
    }
};
