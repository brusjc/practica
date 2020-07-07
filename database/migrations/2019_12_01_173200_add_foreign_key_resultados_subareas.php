<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyResultadosSubareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('resultados', function (Blueprint $table) {
            $table->foreign('subarea_id')
                 ->references('id')->on('subareas')
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
       Schema::table('resultados', function (Blueprint $table) {
            $table->dropForeign('resultados_subarea_id_foreign');
        });
    }
}
