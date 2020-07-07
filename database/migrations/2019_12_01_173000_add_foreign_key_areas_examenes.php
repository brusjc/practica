<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAreasExamenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('areas', function (Blueprint $table) {
            $table->foreign('examen_id')
                 ->references('id')->on('examens')
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
       Schema::table('areas', function (Blueprint $table) {
            $table->dropForeign('areas_examen_id_foreign');
        });
    }
}
