<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcomments', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->text('content');
            $table->biginteger('parent_id')->unsigned()->nullable();
            $table->biginteger('post_id')->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('postcomments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcomments');
    }
}
