<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumPostsWedding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'posts_wedding',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('content');
                $table->integer('categorie_id')->unsigned();
                $table->foreign('categorie_id')->references('id')->on('categories_wedding');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_wedding');
    }
}
