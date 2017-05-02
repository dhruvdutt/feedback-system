<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('attendance',function(Blueprint $table){
        $table->integer('student_feedback_id')->index();
        $table->integer('student_id');
        $table->integer('feedback_id')->index();
        $table->boolean('attendance');

        $table->foreign('feedback_id')->references('feedback_id')->on('feedback_meta_data');
        $table->primary('student_feedback_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}
