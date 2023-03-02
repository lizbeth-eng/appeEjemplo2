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
        Schema::create('ponencias', function (Blueprint $table) {
            $table->increments('idPonencia');
            $table->integer('idPais')->unsigned();
            $table->foreign('idPais')->references('idPais')->on('paises');
            $table->integer('idUniversidad')->unsigned();
            $table->foreign('idUniversidad')->references('idUniversidad')->on('universidades');
            $table->integer('idModalidad')->unsigned();
            $table->foreign('idModalidad')->references('idModalidad')->on('modalidades');
            $table->datatime('fecha');
            $table->string('tema',255);
            $table->string('ponente',100);
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
        Schema::dropIfExists('ponencias');
    }
};
