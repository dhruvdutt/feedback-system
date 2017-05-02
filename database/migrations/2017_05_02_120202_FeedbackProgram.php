<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_program',function(Blueprint $table){
          $table->integer('feedback_program_id')->index();
          $table->integer('feedback_id')->index();
          $table->string('program_id')->index();
          $table->date('start_date');
          $table->date('end_date');

          $table->foreign('feedback_id')->references('feedback_id')->on('feedback_meta_data');
          $table->foreign('program_id')->references('program_id')->on('program');
          $table->primary('feedback_program_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_program');
    }
}