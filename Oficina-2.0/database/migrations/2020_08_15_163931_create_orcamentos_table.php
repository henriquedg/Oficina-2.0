<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cria a tabela de Orçamentos
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->integer('orcamento_id')->unique();
            $table->string('cliente');
            $table->date('data');
            $table->time('hora');
            $table->string('vendedor');
            $table->text('descricao');
            $table->decimal('valor');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}
