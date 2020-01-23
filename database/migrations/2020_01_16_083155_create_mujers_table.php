<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mujeres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('fechas',9);
            $table->string('subarea',50);
            $table->text('datos');
            $table->text('datos_eus');
            $table->text('datos_ing');
            $table->string('enlace',100);
            $table->string('zona',50);
            $table->string('fotografia',100);
            $table->timestamps();


            // campo para clave foraneas
            $table->integer('codArea')->unsigned();
            $table->integer('codZona')->unsigned();
            //relaciones
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
        Schema::dropIfExists('mujers');
    }
}
