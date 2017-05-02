<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_link',function(Blueprint $table){
          $table->integer('question_id')->index();
          $table->integer('i_question_id')->index();
          $table->integer('course_id')->unsigned()->nullable();
          $table->integer('feedback_id')->nullable();

          $table->foreign('course_id')->references('course_id')->on('course');
          $table->foreign('feedback_id')->references('feedback_id')->on('feedback_meta_data');
          $table->primary('question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('question_link');
    }
}
