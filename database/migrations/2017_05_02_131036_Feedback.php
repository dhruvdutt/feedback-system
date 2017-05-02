<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Feedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback',function(Blueprint $table){
        $table->increments('pct_feedback_serial_id');
        $table->integer('program_course_term_id')->unsigned()->index();
        $table->integer('feedback_id')->unsigned()->index();
        $table->integer('serial_no');

        $table->foreign('program_course_term_id')->references('program_course_term_id')->on('program_course_term');
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
      Schema::dropIfExists('feedback');
    }
}
