<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'deleted_conversations', function (Blueprint $table) {
            $table->unsignedBigInteger('conversation_id');
            $table->unsignedBigInteger('user_id');

            $table->primary(['conversation_id', 'user_id']);

            $table->foreign('conversation_id')
                ->references('id')->on('conversations')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

        Schema::create('deleted_messages', function (Blueprint $table) {
            $table->unsignedBigInteger( 'message_id');
            $table->unsignedBigInteger('user_id');

            $table->primary([ 'message_id', 'user_id']);

            $table->foreign('message_id')
                ->references('id')->on( 'messages')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
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

        Schema::dropIfExists( 'deleted_messages');


        Schema::dropIfExists( 'deleted_conversations');


    }
}
