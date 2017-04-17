<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('question_master', function(Blueprint $table) {
        $table->increments('question_id');
        $table->string('course_id')->nullable();
        $table->unsignedInteger('term_id')->nullable();
        $table->string('question');
        $table->unsignedInteger('answer_type_id');
        $table->boolean('lecture');
        $table->boolean('lab');
        $table->boolean('tutorial');

        $table->foreign('course_id')->references('course_id')->on('course_master');
        $table->foreign('term_id')->references('term_id')->on('term_year_master');
        $table->foreign('answer_type_id')->references('answer_type_id')->on('answer_master');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_master');
    }
}
