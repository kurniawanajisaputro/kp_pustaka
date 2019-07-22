<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('content_id');
            $table->string('content_title',225);
			$table->text('content_desc');
			$table->string('content_path',20);
			$table->smallInteger('is_news');
			$table->dateTime('input_date');
			$table->dateTime('last_update');
			$table->enum('content_ownpage', array('1', '2'));
			$table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('content');
    }
}
