<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quejas', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('UsuarioIdentificacion');
            $table->foreign('UsuarioIdentificacion')->references('identificacion')->on('usuarios');
            $table->primary(['id','UsuarioIdentificacion']);
            $table->string('Descripcion');
            $table->string('Link')->nullable(true);
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
        Schema::dropIfExists('quejas');
    }
}
