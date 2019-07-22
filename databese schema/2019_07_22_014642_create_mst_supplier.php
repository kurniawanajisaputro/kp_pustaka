<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('supplier_id');
			$table->string('supplier_name',100);
			$table->string('address',100);
			$table->char('postal_code', 10);
			$table->char('phone', 14);
			$table->char('contact', 30);
			$table->char('fax', 14);
			$table->char('account', 12);
			$table->char('e_mail', 80);
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
			Schema::dropIfExists('mst_supplier');
    }
}
