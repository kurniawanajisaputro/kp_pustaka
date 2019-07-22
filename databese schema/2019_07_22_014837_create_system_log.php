<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('log_id');
			$table->enum('log_type', array('staff', 'member', 'system'));
			$table->string('id',50);
			$table->string('log_location',50);
			$table->text('log_msg');
			$table->dateTime('log_date');
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('system_log');
    }
}
