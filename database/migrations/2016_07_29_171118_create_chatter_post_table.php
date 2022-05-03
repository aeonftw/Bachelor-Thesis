<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatterPostTable extends Migration
{
    public function up()
    {
        Schema::create('chatter_post', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->biginteger('chatter_discussion_id')->unsigned();
            $table->biginteger('user_id')->unsigned();
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('chatter_post');
    }
}
