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
      Schema::create('course_master',function (Blueprint $table){
          $table->string('course_id')->index();
          $table->string('course_name')->index();
          $table->float('lecture_grade',8,2)->index();
          $table->float('lab_grade',8,2)->index();
          $table->float('tutorial_grade',8,2)->index();
          $table->primary('courde_id');
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