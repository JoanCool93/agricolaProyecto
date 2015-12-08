<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineaventas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('idVenta')->unsigned();
            $table->integer('idGrano')->unsigned();
            $table->integer('cantidad');
            $table->integer('subTotal');
            $table->timestamps();
        });
        
        Schema::table('lineaventas', function($table)
        {
            $table->foreign('idVenta')
                ->references('id')->on('ventas')
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
        Schema::drop('lineaventas');
    }
}
