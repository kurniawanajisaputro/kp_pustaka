<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('reserve_id');
			$table->string('member_id',20);
			$table->integer('biblio_id');
			$table->string('item_code',20);
			$table->dateTime('reserve_date');
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('reserve');
    }
}
