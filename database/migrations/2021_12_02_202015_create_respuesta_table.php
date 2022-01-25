<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->unsignedBigInteger('P_ID');
            $table->foreign('P_ID')->references('PreguntaID')->on('opcions');
            $table->unsignedBigInteger('O_ID');
            $table->foreign('O_ID')->references('id')->on('opcions');
            $table->string('U_ID');
            $table->foreign('U_ID')->references('UsuarioID')->on('encuestas_realizadas');
            $table->timestamp('FE');
            $table->foreign('FE')->references('Fecha')->on('encuestas_realizadas');
            $table->primary(['P_ID','O_ID','U_ID','FE']);
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
        Schema::dropIfExists('respuesta');
    }
}
