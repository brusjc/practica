<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyRespuestasPreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('respuestas', function (Blueprint $table) {
            $table->foreign('pregunta_id')
                 ->references('id')->on('preguntas')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('respuestas', function (Blueprint $table) {
            $table->dropForeign('respuestas_pregunta_id_foreign');
        });
    }
}
