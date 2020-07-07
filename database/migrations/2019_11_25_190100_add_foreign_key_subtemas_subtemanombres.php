<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySubtemasSubtemanombres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('subtemas', function (Blueprint $table) {
            $table->foreign('nombre_id')
                 ->references('id')->on('subtemanombres')
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
       Schema::table('subtemas', function (Blueprint $table) {
            $table->dropForeign('subtemas_nombre_id_foreign');
        });
    }
}
