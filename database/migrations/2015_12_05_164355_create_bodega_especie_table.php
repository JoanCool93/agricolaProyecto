<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodegaEspecieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodega_especie', function (Blueprint $table) {
            $table->integer('idBodega')->unsigned();
            $table->integer('idEspecie')->unsigned();
            $table->timestamps();

            $table->primary(['idBodega', 'idEspecie']);
        });

        Schema::table('bodega_especie', function($table)
        {
            $table->foreign('idBodega')
                ->references('id')->on('bodegas')
                ->onDelete('cascade');
            $table->foreign('idEspecie')
                ->references('id')->on('especies')
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
        Schema::drop('bodega_especie');
    }
}
