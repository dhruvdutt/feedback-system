<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionMeta extends Migration
{
		/**
			* Run the migrations.
			*
			* @return void
			*/
		public function up()
		{
				Schema::create('question_meta',function(Blueprint $table){
						$table->increments('i_question_id');
						$table->string('type');
						$table->string('question');
						$table->integer('answer_type_id')->unsigned()->index();
						$table->tinyInteger('lecture');
						$table->tinyInteger('lab');
						$table->tinyInteger('tutorial');

						$table->foreign('answer_type_id')->references('answer_type_id')->on('answer_type');
				});
		}

		/**
			* Reverse the migrations.
			*
			* @return void
			*/
		public function down()
		{
				Schema::dropIfExists('question_meta');
		}
}
