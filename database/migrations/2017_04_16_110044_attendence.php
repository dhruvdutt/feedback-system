<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendence',function(Blueprint $table){
          $table->integer('feedback_student_id')->index();
          $table->integer('feedback_id')->index();
          $table->integer('student_id');
          $table->string('programme_id')->index();
          $table->string('attendence');
          $table->primary('feedback_student_id');
          $table->foreign('feedback_id')->references('feedback_id')->on('feedback_master');
          $table->foreign('programme_id')->references('programme_id')->on('programme_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendence');
    }
}
