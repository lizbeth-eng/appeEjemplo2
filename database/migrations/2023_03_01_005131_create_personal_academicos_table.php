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
        Schema::create('personal_academicos', function (Blueprint $table) {
            $table->increments('idPersonalAcademico');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('idCargoAcademico')->unsigned();
            $table->foreign('idCargoAcademico')->references('idCargoAcademico')->on('cargo_academicos');
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamentos');
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
        Schema::dropIfExists('personal_academicos');
    }
};
