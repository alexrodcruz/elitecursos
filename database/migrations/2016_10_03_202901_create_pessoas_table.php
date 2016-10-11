<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',200);
            $table->string('sexo',20);
            $table->date('dataNascimento');
            $table->string('estadoCivil',20);
            $table->string('cpf',200);
            $table->string('rg',200);
            $table->string('orgaoEmissor',200);
            $table->string('fone1',200);
            $table->string('fone2',200);
            $table->string('email')->unique();
            $table->string('enderecoCep',200);
            $table->string('enderecoRua',200);
            $table->string('enderecoNumero',200);
            $table->string('enderecoBairro',200);
            $table->string('enderecoCidade',200);
            $table->string('enderecoEstado',200);
            $table->integer('isAdm')->default(0);
            $table->integer('isProfessor')->default(0);
            $table->integer('isAluno')->default(0);
            $table->integer('ativo')->default(1);
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
        Schema::dropIfExists('pessoas');
    }
}
