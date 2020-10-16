<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_recive');
            $table->unsignedBigInteger('user_sent');
            $table->text('text');
            $table->string('image_path')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();

            $table->foreign('user_recive')->references('id')->on('users');
            $table->foreign('user_sent')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
