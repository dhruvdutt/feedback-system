<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentFeedbackMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_feedback_master',function(Blueprint $table){
          $table->integer('serial_programme_course_term_question_id')->index();
          $table->integer('serial_programme_course_term_id')->index();
          $table->integer('question_id')->index();
          $table->integer('answer_type_id')->index();
          $table->string('answer');
          $table->foreign('serial_programme_course_term_id')->references('serial_programme_course_term_id')->on('feedback');
          $table->foreign('question_id')->references('question_id')->on('question_master');
          $table->foreign('answer_type_id')->references('answer_type_id')->on('answer_master');
          $table->primary('serial_programme_course_term_question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
