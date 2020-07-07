<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('pagina_id');
            $table->longText('pregunta');
            $table->longText('r1');
            $table->longText('r2');
            $table->longText('r3');
            $table->integer('acierto');
            $table->longText('imagen');
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
        Schema::dropIfExists('practicas');
    }
}
