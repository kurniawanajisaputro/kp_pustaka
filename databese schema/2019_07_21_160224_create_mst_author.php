<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstAuthor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('author_id');
			$table->string('author_name',100);
			$table->string('author_year',20);
			$table->enum('authority_type', array('p', 'o', 'c'));
			$table->string('auth_list',20);
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
			Schema::dropIfExists('mst_author');
    }
}
