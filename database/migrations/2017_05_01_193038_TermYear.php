<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TermYear extends Migration
{
		/**
			* Run the migrations.
			*
			* @return void
			*/
		public function up()
		{
				Schema::create('term_year',function(Blueprint $table){
						$table->engine = 'InnoDB';

						$table->integer('term_id')->index();
						$table->string('term_name');
						$table->string('year_id');
						$table->string('year_name');

						$table->primary('term_id');
				});
		}

		/**
			* Reverse the migrations.
			*
			* @return void
			*/
		public function down()
		{
				Schema::dropIfExists('term_year');
		}
}
