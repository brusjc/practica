<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostcommentsPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('postcomments', function (Blueprint $table) {
            $table->foreign('post_id')
                 ->references('id')->on('posts')
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
            $table->dropForeign('postcomments_posts_id_foreign');
        });
    }
}
