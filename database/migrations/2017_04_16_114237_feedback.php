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
          $table->integer('serial_programme_course_term_id')->index();
          $table->integer('serial_no');
          $table->integer('programme_course_term_id')->index();
          $table->integer('feedback_id')->index();
          $table->foreign('programme_course_term_id')->references('programme_course_term_id')->on('programme_course_term_master');
          $table->foreign('feedback_id')->references('feedback_id')->on('feedback_master');
          $table->primary('serial_programme_course_term_id');
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
