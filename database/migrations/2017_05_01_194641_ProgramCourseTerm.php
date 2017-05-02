<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramCourseTerm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('program_course_term',function(Blueprint $table){
        $table->increments('program_course_term_id');
        $table->integer('program_id')->unsigned();
        $table->integer('course_id')->unsigned();
        $table->integer('term_id')->unsigned();

        $table->foreign('program_id')->references('program_id')->on('program');
        $table->foreign('course_id')->references('course_id')->on('course');
        $table->foreign('term_id')->references('term_id')->on('term_year');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_course_term');
    }
}
