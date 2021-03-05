<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('subtema_id')->unsigned();
            $table->bigInteger('nombre_id')->unsigned();
            $table->Integer('total');
            $table->Integer('contestadas');
            $table->integer('orden');
            $table->float('nota', 5, 2);
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
        Schema::dropIfExists('subareas');
    }
}
