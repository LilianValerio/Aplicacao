<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_atividades', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('acertos')->nullable();
            $table->smallInteger('erros')->nullable();
            $table->char('status')->nullable();

            $table->Integer('dependente_id')->unsigned();
            $table->foreign('dependente_id')
                ->references('id')->on('dependentes')
                ->onDelete('cascade');

            $table->Integer('atividade_id')->unsigned();
            $table->foreign('atividade_id')
                ->references('id')->on('atividades')
                ->onDelete('cascade');
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
        Schema::dropIfExists('result_atividades');
    }
}
