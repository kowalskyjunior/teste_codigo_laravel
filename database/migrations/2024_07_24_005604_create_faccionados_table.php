<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('faccionados', function (Blueprint $table) {
            $table->id();
            $table->string('nome_faccionado');
            $table->enum('genero', ['Masculino', 'Feminino', 'Outro']);
            $table->date('data_nascimento')->nullable();
            $table->string('cpf')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estado_naturalidade')->nullable();
            $table->string('cidade_naturalidade')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_conjuge')->nullable();
            $table->string('organizacao_faccionado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faccionados');
    }
};
