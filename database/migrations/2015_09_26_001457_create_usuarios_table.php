<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->string('apellidoMaterno');
            $table->string('apellidoPaterno');
            $table->string('correoElectronico');
            $table->string('telefono');
            $table->string('celular');
            $table->string('password', 60);
            $table->integer('tipoUsuario');
            $table->rememberToken();
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
        Schema::drop('usuarios');
    }
}
