<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySubareasAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('subareas', function (Blueprint $table) {
            $table->foreign('area_id')
                 ->references('id')->on('areas')
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
       Schema::table('subareas', function (Blueprint $table) {
            $table->dropForeign('subareas_area_id_foreign');
        });
    }
}
