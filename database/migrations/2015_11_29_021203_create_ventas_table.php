<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('idCliente')->unsigned();
            $table->date('fecha');
            $table->integer('estadoVenta');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::table('ventas', function($table)
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
        Schema::drop('ventas');
    }
}
