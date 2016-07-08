<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('boardcomments',function (Blueprint $table){
        $table->increments('id')->unique();
        $table->string('user_id')->unique();
        $table->string('board_id');
        $table->string('comments');
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
        Schema::drop('boardcomments');
    }
}
