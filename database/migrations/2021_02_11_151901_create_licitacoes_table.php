<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicitacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacoes', function (Blueprint $table) {
            $table->id();
            $table->string('num_edital');
            $table->string('num_processo');
            $table->integer('data_publicacao');
            $table->integer('data_abertura');
            $table->string('modalidade');
            $table->string('objeto');
            $table->string('situacao');
            $table->string('resultado');
            $table->integer('text_licitacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licitacoes');
    }
}
