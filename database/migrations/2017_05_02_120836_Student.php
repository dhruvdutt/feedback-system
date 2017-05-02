<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student',function(Blueprint $table){
          $table->increments('student_program_id');
          $table->integer('student_id')->index();
          $table->string('program_id')->index();
          $table->string('course_id')->index();

          $table->foreign('program_id')->references('program_id')->on('program');
          $table->foreign('course_id')->references('course_id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
