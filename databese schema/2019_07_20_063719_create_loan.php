<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('loan_id');
			$table->string('item_code',20);
			$table->string('member_id',20);
			$table->date('loan_date');
			$table->date('due_date');
			$table->integer('renewed');
			$table->integer('loan_rules_id');
			$table->date('actual');
			$table->integer('is_lent');
			$table->integer('is_return');
			$table->date('return_date');
			$table->dateTime('input_date');
			$table->dateTime('last_update');
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('loan');
    }
}
