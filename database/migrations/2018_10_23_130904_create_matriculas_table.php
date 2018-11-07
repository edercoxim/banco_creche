<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('matriculas', function (Blueprint $table) {

            $table->increments('id');
            $table->date('dataMatric');
            $table->integer('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

            //$table->integer('sala_id')->unsigned();
//            $table->dropForeign('matriculas_sala_id_foreign');
//            $table->foreign('sala_id')->references('id')->on('salas')->onDelete('cascade');
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
        Schema::dropIfExists('matriculas');
//        Schema::disableForeignKeyConstraints('matriculas');

    }
}
