<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineacomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineacompras', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('idCompra')->unsigned();
            $table->integer('idGrano')->unsigned();
            $table->integer('cantidad');
            $table->integer('subTotal');
            $table->timestamps();
        });
        
        Schema::table('lineacompras', function($table)
        {
            $table->foreign('idCompra')
                ->references('id')->on('compras')
                ->onDelete('cascade');
            $table->foreign('idGrano')
                ->references('id')->on('granos')
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
        Schema::drop('lineacompras');
    }
}
