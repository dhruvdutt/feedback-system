<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_master',function(Blueprint $table){
          $table->integer('feedback_id')->index();
          $table->string('username')->index();
          $table->integer('term_id')->index();
          $table->dateTime('start_date');
          $table->dateTime('end_date');
          $table->foreign('username')->references('username')->on('user_master');
          $table->foreign('term_id')->references('term_id')->on('term_master');
          $table->primary('feedback_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('feedback_master');
    }
}
