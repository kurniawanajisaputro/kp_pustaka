<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('file_id');
			$table->text('file_title');
			$table->text('file_name');
			$table->text('file_url');
			$table->text('file_dir');
			$table->string('mime_type',100);
			$table->text('file_desc');
			$table->integer('uploader_id');
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
			Schema::dropIfExists('files');
    }
}
