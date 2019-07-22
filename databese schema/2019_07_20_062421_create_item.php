<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('item_id');
			$table->integer('biblio_id');
			$table->string('mst_publisher',50);
			$table->integer('coll_type_id');
			$table->string('item_code',20);
			$table->string('inventory_code',100);
			$table->date('received_date');
			$table->string('supplier_id',6);
			$table->string('order_no',20);
			$table->string('location_id',3);
			$table->date('order_date');
			$table->char('item_status_id', 3);
			$table->string('site',50);
			$table->integer('source');
			$table->string('invoice',20);
			$table->integer('price');
			$table->string('price_currency',10);
			$table->date('invoice_date');
			$table->dateTime('input_date');
			$table->dateTime('last_update');
			$table->integer('uid');
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('item');
    }
}
