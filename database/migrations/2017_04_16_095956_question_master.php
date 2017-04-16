<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_master',function(Blueprint $table){
          $table->integer('question_id')->index();
          $table->string('course_id')->index();
          $table->integer('feedback_id')->index();
          $table->string('question');
          $table->string('question_type');
          $table->integer('answer_type_id')->index();
          $table->primary('question_id');
          $table->foreign('course_id')->references('course_id')->on('course_master');
          $table->foreign('feedback_id')->references('feedback_id')->on('feedback_master');
          $table->foreign('answer_type_id')->references('answer_type_id')->on('answer_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_master');
    }
}
