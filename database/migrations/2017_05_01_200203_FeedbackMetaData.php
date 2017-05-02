<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackMetaData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback_meta_data',function(Blueprint $table){
        $table->increments('feedback_id');
        $table->string('feedback_name');
        $table->string('created_by')->index();
        $table->boolean('start_flag');
        $table->boolean('active_flag');
        $table->date('start_date');
        $table->date('end_date');

        $table->foreign('created_by')->references('username')->on('user');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('feedback_meta_data');
    }
}
