<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nome');
            $table->date('dataNasc');
            $table->text('mae');
            $table->text('pai');
            $table->text('telResponsavel');
//            $table->integer('creche_id')->unsigned()->nullable();
//            $table->foreign('creche_id')->references('id')->on('creches');
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
        Schema::dropIfExists('alunos');
    }
}
