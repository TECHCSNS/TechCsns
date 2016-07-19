<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userprofiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('userprofiles',function (Blueprint $table){
        
            $table->increments('id')->unique();
            $table->integer('permission_id');
            $table->string('name');
            $table->string('katakana_name');
            $table->date('birth');
            $table->string('email');
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
         Schema::drop('userprofiles');
    }
}
