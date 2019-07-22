<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstMemberType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('member_type_id');
			$table->string('member_type_name',50);
			$table->integer('loan_limit');
			$table->integer('loan_periode');
			$table->integer('enable_reserve');
			$table->integer('reserve_limit');
			$table->integer('member_periode');
			$table->integer('reborrow_limit');
			$table->integer('fine_each_day');
			$table->integer('grace_periode');
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
			Schema::dropIfExists('mst_member_type');
    }
}
