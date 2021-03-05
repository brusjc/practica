<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySubtemasTemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('subtemas', function (Blueprint $table) {
            $table->foreign('tema_id')
                 ->references('id')->on('temas')
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
            $table->dropForeign('subtemas_temas_id_foreign');
        });
    }
}
