<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasRealizadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas_realizadas', function (Blueprint $table) {
            $table->string('UsuarioID');
            $table->foreign('UsuarioID')->references('Identificacion')->on('usuarios');
            $table->string('EncuestaNombre');
            $table->foreign('EncuestaNombre')->references('NombreEncuesta')->on('encuesta');
            $table->timestamp('Fecha');
            $table->primary(['Fecha','UsuarioID']);
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
        Schema::dropIfExists('encuestas_realizadas');
    }
}
