<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackMetaDataMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback_meta_data_master',function(Blueprint $table){
        $table->string('feedback_id')->index();
        $table->string('term_id')->index();
        $table->string('year_id')->index();
        $table->date('start_date');
        $table->date('end_date');
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
      Schema::dropIfExists('feedback_meta_data_master');
    }
}
