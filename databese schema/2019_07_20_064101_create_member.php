<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('member_id');
			$table->string('sub_idm',20);
			$table->string('member_name',100);
			$table->integer('gender');
			$table->date('birth_date');
			$table->integer('member_type_id');
			$table->string('member_address',255);
			$table->string('member_mail_address',255);
			$table->string('member_email',100);
			$table->string('postal_code',20);
			$table->string('inst_name',100);
			$table->integer('is_new');
			$table->string('member_image',200);
			$table->string('pin',50);
			$table->string('member_phone',50);
			$table->string('member_fax',50);
			$table->date('member_since_date');
			$table->date('register_date');
			$table->date('expire_date');
			$table->text('member_notes');
			$table->smallInteger('is_pending');
			$table->char('mpasswd', 128);
			$table->dateTime('last_login');
			$table->string('last_login_ip',20);
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
			Schema::dropIfExists('member');
    }
}
