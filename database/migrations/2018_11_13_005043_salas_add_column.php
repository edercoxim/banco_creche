<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalasAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('salas', function (Blueprint $table) {
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
            $table->integer('creche_id')->unsigned();
            $table->foreign('creche_id')->references('id')->on('creches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('salas', function (Blueprint $table) {
            //
        });
    }
}
