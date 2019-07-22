<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTakeItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('stock_take_id');
			$table->integer('item_id');
			$table->string('item_code',20);
			$table->string('title',255);
			$table->string('gmd_name',30);
			$table->string('classification',30);
			$table->string('coll_type_name',30);
			$table->string('call_number',50);
			$table->string('location',100);
			$table->enum('status', array('e', 'm', 'u', 'l'));
			$table->string('checked_by',50);
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
			Schema::dropIfExists('stock_take_item');
    }
}
