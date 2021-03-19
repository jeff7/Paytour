<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFormulario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('escolaridade');
            $table->text('cargo_desejado');
            $table->text('observacao')->nullable();
            $table->string('arquivo');
            $table->ipAddress('ip');
            $table->dateTime('data_hora_envio');

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
        Schema::dropIfExists('formulario');
    }
}
