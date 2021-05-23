<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('somos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('atuacao')->nullable();
            $table->text('missao')->nullable();
            $table->text('visao')->nullable();
            $table->text('valores')->nullable();
            $table->string('organograma')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('somos');
    }
}
