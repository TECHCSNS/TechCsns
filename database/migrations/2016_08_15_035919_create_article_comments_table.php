<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments',function (Blueprint $table){
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('body');
            $table->timestamps();
            
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade'); 
                  
            $table->foreign('article_id')
                  ->references('id')
                  ->on('articles')
                  ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article_comments');
    }
}
