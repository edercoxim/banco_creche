<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique()->nullable();
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->string('tipoUser')->nullable();
            $table->timestamp('email_verified_at')->nullable();
<<<<<<< HEAD
=======
            $table->string('password');
            $table->string('cpf')->unique();
            $table->string('endereco');
            $table->string('telefone');
            $table->unsignedInteger('creche_id');
            $table->foreign('creche_id')->references('id')->on('creches');
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
            $table->rememberToken();
            $table->string('password');
            $table->integer('creche_id')->nullable();

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
        Schema::dropIfExists('users');
    }
}
