<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {

            $table->increments('codPeti');
            $table->string('nombreMujer');
            $table->string('fechas');
            $table->string('subarea');
            $table->text('datos');
            $table->string('enlace');
            $table->string('zona');
            $table->string('fotografia');
            $table->timestamps();

             // campo para clave foraneas
            $table->integer('codUsu')->unsigned();
            $table->integer('codArea')->unsigned();
            $table->integer('codZona')->unsigned();

            //relaciones
            $table->foreign('codUsu')->references('id')->on('users');
            $table->foreign('codArea')->references('codArea')->on('areas');
            $table->foreign('codZona')->references('codZona')->on('zonas');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticiones');
    }
}
