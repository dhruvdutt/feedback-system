<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackMetadata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback_metadata', function(Blueprint $table) {
        $table->unsignedInteger('term_id');
        $table->string('username');
        $table->date('start_date');
        $table->date('end_date');

        $table->primary('term_id');
        $table->foreign('term_id')->references('term_id')->on('term_year_master');
        $table->foreign('username')->references('username')->on('user_master');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_metadata');
    }
}
