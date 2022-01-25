<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_datos', function (Blueprint $table) {
            $table->string('UsuarioIdentificacion')->primary();
            $table->foreign('UsuarioIdentificacion')->references('Identificacion')->on('usuarios');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('correo');
            $table->string('Telefono');
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
        Schema::dropIfExists('usuarios_datos');
    }
}
