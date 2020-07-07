<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyEjerpregsPracticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('ejerpregs', function (Blueprint $table) {
            $table->foreign('practica_id')
                 ->references('id')->on('practicas')
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
            $table->dropForeign('ejerpregs_practica_id_foreign');
        });
    }
}
