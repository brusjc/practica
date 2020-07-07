<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjerpregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejerpregs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ejercicio_id')->unsigned();
            $table->bigInteger('practica_id')->unsigned();
            $table->integer('orden');
            $table->integer('contestada');
            $table->integer('acierto');
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
        Schema::dropIfExists('ejerpregs');
    }
}
