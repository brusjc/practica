<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPreguntasSubtemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('preguntas', function (Blueprint $table) {
            $table->foreign('subtema_id')
                 ->references('id')->on('subtemas')
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
            $table->dropForeign('preguntas_subtema_id_foreign');
        });
    }
}
