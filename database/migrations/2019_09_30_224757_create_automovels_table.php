<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
           $table->increments('id');
           // $table->timestamps();
           $table->string('titulo',100);
           $table->string('subtitulo',100);
           $table->string('sinopse',500);
           $table->string('autor', 100);//->unique();
           $table->double('vl_venda');
           $table->date('dt_lancamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
