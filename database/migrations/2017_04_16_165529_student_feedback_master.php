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
      Schema::create('student_feedback_master', function(Blueprint $table) {
        $table->increments('program_course_term_serial_question_id');
        $table->integer('program_course_term_serial_id');
        $table->integer('question_id');
        $table->integer('answer_type_id');
        $table->string('answer');

        $table->foreign('program_course_term_serial_id')->references('program_course_term_serial_id')->on('feedback');
        $table->foreign('question_id')->references('question_id')->on('question_master');
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
        Schema::dropIfExists('student_feedback_master');
    }
}
