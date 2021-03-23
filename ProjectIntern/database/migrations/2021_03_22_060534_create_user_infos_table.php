<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name',255);
            $table->string('user_email',255);
            $table->string('user_pwd',255);
            $table->string('user_display',255);
            $table->string('user_group',255);
            $table->string('user_contact',255);
            $table->timestamp('register_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
