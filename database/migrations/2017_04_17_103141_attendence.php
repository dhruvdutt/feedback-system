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
      Schema::create('attendence', function(Blueprint $table) {
        $table->increments('student_term_id');
        $table->unsignedInteger('term_id');
        $table->double('student_id');
        $table->string('program_id');
        $table->boolean('attendence');

        $table->foreign('term_id')->references('term_id')->on('term_year_master');
        $table->foreign('program_id')->references('program_id')->on('program_master');
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
