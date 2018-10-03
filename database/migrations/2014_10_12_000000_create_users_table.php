<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf', 11);
            $table->enum('sexo',['M','F']);
            $table->enum('perfil',['1','2','3','4']);
            $table->integer('profissao_id')->nullable();
            $table->string('telefone',15);
            $table->string('cidade',100);
            $table->string('estado',30);
            $table->integer('disturbio_id');
            $table->date('data_nasc');
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
        Schema::dropIfExists('users');
    }
}
