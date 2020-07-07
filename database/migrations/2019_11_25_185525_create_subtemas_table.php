<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('tema_id')->unsigned();
            $table->biginteger('nombre_id')->unsigned();
            $table->integer('verificado')->nullable();
            $table->integer('orden');
            $table->float('porcentaje', 5, 2);
            $table->integer('tipo');
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
        Schema::dropIfExists('subtemas');
    }
}
