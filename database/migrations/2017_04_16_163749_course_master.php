<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('course_master', function(Blueprint $table) {
        $table->string('course_id')->index();
        $table->string('course_name');
        $table->string('course_type');
        $table->float('lecture_grade');
        $table->float('lab_grade');
        $table->float('tutorial_grade');

        $table->primary('course_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_master');
    }
}
