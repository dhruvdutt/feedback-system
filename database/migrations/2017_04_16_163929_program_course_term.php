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
      Schema::create('program_course_term', function(Blueprint $table) {
        $table->increments('program_course_term_id');
        $table->string('program_id');
        $table->string('course_id');
        $table->unsignedInteger('term_id');

        $table->foreign('program_id')->references('program_id')->on('program_master');
        $table->foreign('course_id')->references('course_id')->on('course_master');
        $table->foreign('term_id')->references('term_id')->on('term_year_master');
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
