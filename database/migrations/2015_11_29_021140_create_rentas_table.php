<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->increments('idRenta')->unsigned();
            $table->integer('idCliente')->unsigned();
            $table->integer('idBodega')->unsigned();
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->integer('duracionMeses');
            $table->integer('importe');
            $table->timestamps();
        });
        
        Schema::table('rentas', function($table)
        {
            $table->foreign('idCliente')
                ->references('id')->on('usuarios')
                ->onDelete('cascade');
            $table->foreign('idBodega')
                ->references('id')->on('bodegas')
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
        Schema::drop('rentas');
    }
}
