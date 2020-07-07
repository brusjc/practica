<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPreguntasEnunciados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('preguntas', function (Blueprint $table) {
            $table->foreign('enunciado_id')
                 ->references('id')->on('enunciados')
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
       Schema::table('preguntas', function (Blueprint $table) {
            $table->dropForeign('preguntas_enunciado_id_foreign');
        });
    }
}
