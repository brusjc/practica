<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEjerpregsEjercicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('ejerpregs', function (Blueprint $table) {
            $table->foreign('ejercicio_id')
                 ->references('id')->on('ejercicios')
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
       Schema::table('ejerpregs', function (Blueprint $table) {
            $table->dropForeign('ejerpregs_ejercicio_id_foreign');
        });
    }
}
