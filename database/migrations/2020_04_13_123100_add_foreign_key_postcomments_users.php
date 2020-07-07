<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostcommentsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('postcomments', function (Blueprint $table) {
            $table->foreign('user_id')
                 ->references('id')->on('users')
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
       Schema::table('postcomments', function (Blueprint $table) {
            $table->dropForeign('postcomments_users_id_foreign');
        });
    }
}
