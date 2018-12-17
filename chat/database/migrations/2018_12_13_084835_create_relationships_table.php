<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->comment("用户ID");
            $table->unsignedInteger('request_id')->comment("请求的对方ID");
            $table->tinyInteger("state")->default(0)->comment("请求状态(0未操作,1已通过,2未通过)");
            $table->timestamp('send_time')->comment("请求时间")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
