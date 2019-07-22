<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchBiblio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			$table->integer('biblio_id');
			$table->text('title');
			$table->string('edition',50);
			$table->string('isbn_issn',20);
			$table->text('author');
			$table->text('topic');
			$table->string('gmd',30);
			$table->string('publisher',100);
			$table->string('publish_place',30);
			$table->string('language',20);
			$table->string('classification',40);
			$table->text('spec_detail_info');
			$table->string('carrier_type',100);
			$table->string('content_type',100);
			$table->string('media_type',100);
			$table->text('location');
			$table->string('publish_year',20);
			$table->text('notes');
			$table->text('series_title');
			$table->text('items');
			$table->text('collection_types');
			$table->string('call_number',50);
			$table->smallInteger('opac_hide');
			$table->smallInteger('promoted');
			$table->text('labels');
			$table->string('collation',100);
			$table->string('image',100);
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
			Schema::dropIfExists('search_biblio');
    }
}
