<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Program extends Migration
{
		/**
			* Run the migrations.
			*
			* @return void
			*/
		public function up()
		{
				Schema::create('program',function(Blueprint $table){
						$table->engine = 'InnoDB';

						$table->string('program_id')->index();
						$table->string('program_name');

						$table->primary('program_id');
				});
		}

		/**
			* Reverse the migrations.
			*
			* @return void
			*/
		public function down()
		{
				Schema::dropIfExists('program');
		}
}
