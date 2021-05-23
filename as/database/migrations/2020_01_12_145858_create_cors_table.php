<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->unique;
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('cors', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cors');
    }
}
