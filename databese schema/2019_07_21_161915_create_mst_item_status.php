<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstItemStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->char('item_status_id', 3);
			$table->string('item_status_name',30);
			$table->string('rules',255);
			$table->smallInteger('no_loan');
			$table->smallInteger('skip_stock_take');
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
			Schema::dropIfExists('mst_item_status');
    }
}
