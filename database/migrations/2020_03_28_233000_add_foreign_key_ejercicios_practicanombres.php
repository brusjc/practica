<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEjerciciosPracticanombres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('ejercicios', function (Blueprint $table) {
            $table->foreign('pagina_id')
                 ->references('id')->on('practicanombres')
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
       Schema::table('ejercicios', function (Blueprint $table) {
            $table->dropForeign('ejercicios_pagina_id_foreign');
        });
    }
}
