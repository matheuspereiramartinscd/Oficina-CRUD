<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('vendedor');
            $table->text('descricao')->nullable();
            $table->decimal('valor_orcado', 10, 2);
            $table->dateTime('data_hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}
