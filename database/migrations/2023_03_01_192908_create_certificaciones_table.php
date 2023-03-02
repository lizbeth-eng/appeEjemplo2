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
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->increments('idCertificacion');
            $table->string('nombreCerfiticacion');
            $table->enum('numeroEstudiantes');
            $table->string('observciones ');
            $table->string('status');
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
        Schema::dropIfExists('certificaciones');
    }
};
