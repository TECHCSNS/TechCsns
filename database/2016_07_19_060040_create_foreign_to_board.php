<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignToBoard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boardcomments', function (Blueprint $table) {
            $table->foreign('board_id')
                ->references('id')
                ->on('boards')
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
        Schema::table('boardcomments', function (Blueprint $table) {
            $table->dropColumn('board_id');
        });
    }
}
