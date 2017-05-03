<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentFeedback extends Migration
{
		/**
			* Run the migrations.
			*
			* @return void
			*/
		public function up()
		{
				Schema::create('student_feedback',function(Blueprint $table){
						$table->increments('pct_feedback_serial_question_id');
						$table->integer('pct_feedback_serial_id')->unsigned()->index();
						$table->integer('question_id')->unsigned()->index();
						$table->integer('option_id')->unsigned()->nullable();

						$table->foreign('pct_feedback_serial_id')->references('pct_feedback_serial_id')->on('feedback');
						$table->foreign('question_id')->references('question_id')->on('question_link');
						$table->foreign('option_id')->references('option_id')->on('option');
				});
		}

		/**
			* Reverse the migrations.
			*
			* @return void
			*/
		public function down()
		{
				Schema::dropIfExists('student_feedback');
		}
}
