<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
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
            $table->integer('idGrano')->unsigned();
            $table->integer('cantidad');
            $table->integer('idBodega')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('lineaventas', function($table)
        {
            $table->foreign('idGrano')
                ->references('id')->on('granos')
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
        Schema::drop('lineacompras');
    }
}
