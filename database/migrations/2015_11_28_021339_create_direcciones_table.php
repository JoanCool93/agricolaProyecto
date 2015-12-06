<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->integer('idCliente')->unsigned();
            $table->integer('idDireccion')->unsigned();
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->timestamps();

            $table->primary(['idCliente', 'idDireccion']);
        });
        Schema::table('direcciones', function($table)
        {
            $table->foreign('idCliente')
                ->references('id')->on('usuarios')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direcciones');
    }
}
