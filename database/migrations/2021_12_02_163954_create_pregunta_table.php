<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('EncuestaNombre');
            $table->foreign('EncuestaNombre')->references('NombreEncuesta')->on('encuesta');
            $table->string('TipoPregunta')->nullable(false);
            $table->string('Pregunta');
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
        Schema::dropIfExists('pregunta');
    }
}
