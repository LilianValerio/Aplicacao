<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalavrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palavras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('name', 25);
            $table->enum('nivel', [ 1, 2, 3, 4, 5]);
            $table->integer('qtd_letras')->nullable();
            $table->integer('qtd_silabas')->nullable();
            $table->char('tipo', 25);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palavras');
    }
}
