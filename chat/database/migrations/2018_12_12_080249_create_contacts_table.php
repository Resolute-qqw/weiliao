<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->comment("用户ID");
            $table->unsignedInteger('friend_id')->comment("好友ID");
            $table->tinyInteger("state")->default(0)->comment("关系(0好友，1关心，2拉黑)");
            $table->string('remarks',255)->comment("备注");
            $table->string('label',255)->comment("标签");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
