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
      Schema::create('feedback', function(Blueprint $table) {
        $table->increments('program_course_term_serial_id');
        $table->unsignedInteger('program_course_term_id');
        $table->integer('serial_no');

        $table->foreign('program_course_term_id')->references('program_course_term_id')->on('program_course_term');
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
