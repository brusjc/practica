<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTemasPruebas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('temas', function (Blueprint $table) {
            $table->foreign('prueba_id')
                 ->references('id')->on('pruebas')
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
       Schema::table('temas', function (Blueprint $table) {
            $table->dropForeign('temas_prueba_id_foreign');
        });
    }
}
