<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGranosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granos', function (Blueprint $table) {
            $table->increments('id')->unsigned;
            $table->integer('especie')->unsigned();
            $table->string('variedad');
            $table->mediumtext('descripcion');
            $table->string('costo');
            $table->string('tamañoPlanta');
            $table->string('tamañoFruto');
            $table->integer('region')->unsigned();
            $table->string('forma');
            $table->integer('periodoMaduracion');
            $table->string('resistencias');
            $table->string('clima');
            $table->timestamps();
        });
        
        Schema::table('granos', function($table)
        {
            $table->foreign('especie')
                ->references('id')->on('especies')
                ->onDelete('cascade');
            $table->foreign('region')
                ->references('id')->on('regiones')
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
        Schema::drop('granos');
    }
}
