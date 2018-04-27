<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('text');
            $table->unsignedInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table){
            $table->dropForeign(['author_id']);
            $table->dropColumn('posts');
        });
    }
}
