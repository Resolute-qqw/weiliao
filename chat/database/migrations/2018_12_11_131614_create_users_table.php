<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment("用户ID");
            $table->string('username',20)->comment("用户昵称");
            $table->string('account_number',20)->comment("微聊号");
            $table->string('iphone',20)->comment("手机号");
            $table->char('password',60)->comment("密码");
            $table->string('face',255)->comment("头像");
            $table->string('address',20)->comment("地区");
            $table->string('autograph',500)->comment("个性签名");
            $table->tinyInteger('sex')->comment("性别(0男,1女,2保密)");
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
        Schema::dropIfExists('users');
    }
}
