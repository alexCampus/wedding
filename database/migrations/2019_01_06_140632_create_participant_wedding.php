<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantWedding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'participants_wedding',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('firstname');
                $table->integer('age');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users_wedding')->onDelete('cascade');
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
        Schema::dropIfExists('participants_wedding');
    }
}
