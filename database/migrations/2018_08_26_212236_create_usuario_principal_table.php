<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPrincipalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tusuario', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nome_user');
            $table->string('sobrenome_user');
            $table->string('sexo_user');
            $table->string('email_user');
            $table->string('senha_user');
            $table->string('tel_user');
            $table->string('cidade_user');
            $table->string('estado_user');
            $table->string('tipo_user');
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
        Schema::dropIfExists('tusuario');
    }
}
