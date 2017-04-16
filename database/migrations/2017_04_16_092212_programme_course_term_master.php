<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgrammeCourseTermMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('programme_course_term_master',function(Blueprint $table){
        $table->integer('programme_course_term_id')->index();
        $table->foreign('course_id')->references('course_id')->on('course_master');
        $table->foreign('programme_id')->references('programme_id')->on('programme_master');
        $table->primary('programme_course_term_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('programme_course_term_master');
    }
}
