<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id')->comment("消息ID");
            $table->unsignedInteger('user_id')->comment("用户ID");
            $table->unsignedInteger('linkman_id')->comment("联系人ID");
            $table->string('content',300)->comment("聊天内容");
            $table->timestamp('send_time')->comment("发送时间")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
