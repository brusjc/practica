<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyGradosPruebas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('pruebas', function (Blueprint $table) {
            $table->foreign('grado_id')
                 ->references('id')->on('grados')
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
       Schema::table('pruebas', function (Blueprint $table) {
            $table->dropForeign('pruebas_grado_id_foreign');
        });
    }
}
