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
        Schema::create('dualidades', function (Blueprint $table) {
            $table->increments('idDualidad');
            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos');
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresas');
            $table->string('proceso');
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
        Schema::dropIfExists('dualidades');
    }
};
