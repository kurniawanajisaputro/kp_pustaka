<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('user_id');
			$table->string('username',50);
			$table->string('realname',100);
			$table->string('passwd',64);
			$table->string('email',200);
			$table->smallInteger('user_type');
			$table->string('user_image',250);
			$table->text('social_media');
			$table->dateTime('last_login');
			$table->char('last_login_ip', 15);
			$table->string('groups',200);
			$table->date('input_date');
			$table->date('last_update');
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('user');
    }
}
