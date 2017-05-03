<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendance extends Migration
{
		/**
			* Run the migrations.
			*
			* @return void
			*/
		public function up()
		{
				Schema::create('attendance',function(Blueprint $table){
						$table->increments('student_feedback_id');
						$table->integer('student_id');
						$table->integer('feedback_id')->unsigned()->index();
						$table->tinyInteger('attendance');

						$table->foreign('feedback_id')->references('feedback_id')->on('feedback_meta_data');
				});
		}

		/**
			* Reverse the migrations.
			*
			* @return void
			*/
		public function down()
		{
				Schema::dropIfExists('attendance');
		}
}
