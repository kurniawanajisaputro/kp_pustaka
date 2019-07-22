<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('topic_id');
			$table->string('topic',50);
			$table->enum('topic_type', array('t', 'g', 'n', 'tm', 'gr', 'oc'));
			$table->string('auth_list',20);
			$table->string('classification',50);
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
			Schema::dropIfExists('mst_topic');
    }
}
