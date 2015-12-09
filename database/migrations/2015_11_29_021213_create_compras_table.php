<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->date('fecha');
            $table->integer('estadoCompra');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::table('compras', function($table)
        {
            $table->foreign('idEmpleado')
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
        Schema::drop('compras');
    }
}
