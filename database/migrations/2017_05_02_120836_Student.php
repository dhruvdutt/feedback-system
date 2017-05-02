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
          $table->integer('student_id')->index();
          $table->integer('program_id')->unsigned()->index();
          $table->integer('course_id')->unsigned()->index();

          $table->foreign('program_id')->references('program_id')->on('program');
          $table->foreign('course_id')->references('course_id')->on('course');
          $table->primary('student_id');
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
