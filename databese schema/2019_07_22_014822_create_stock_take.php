<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('stock_take_id');
			$table->string('stock_take_name',200);
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->string('init_user',50);
			$table->integer('total_item_stock_taked');
			$table->integer('total_item_lost');
			$table->integer('total_item_exists');
			$table->integer('total_item_loan');
			$table->mediumText('stock_take_users');
			$table->integer('is_active');
			$table->string('report_file',255);
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('stock_take');
    }
}
