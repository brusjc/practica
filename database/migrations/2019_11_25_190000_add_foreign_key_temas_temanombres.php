<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTemasTemanombres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('temas', function (Blueprint $table) {
            $table->foreign('temanombre_id')
                 ->references('id')->on('temanombres')
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
            $table->dropForeign('temas_temanombre_id_foreign');
        });
    }
}
