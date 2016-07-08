<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardCommentsVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('boardcommentvotes',function (Blueprint $table){
        $table->increments('id')->unique();
        $table->string('user_id');
        $table->string('comment_id');
        $table->integer('vote');
        $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('boardcommentvotes');
    }
}
