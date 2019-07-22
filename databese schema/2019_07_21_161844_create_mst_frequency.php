<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstFrequency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('frequency_id');
			$table->string('frequency',25);
			$table->string('language_prefix',5);
			$table->smallInteger('time_increment');
			$table->enum('time_unit', array('day', 'week', 'month', 'year'));
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
			Schema::dropIfExists('mst_frequency');
    }
}
