<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->mediumText('descripcion');
            $table->integer('ancho');
            $table->integer('alto');
            $table->integer('profundidad');
            $table->integer('construccion');
            $table->integer('costoMensual');
            $table->integer('costoAnual');
            $table->integer('capacidadTotal');
            $table->integer('capacidadUsada');
            $table->integer('estadoBodega');
            $table->integer('tipoAcceso');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
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
        Schema::drop('bodegas');
    }
}
