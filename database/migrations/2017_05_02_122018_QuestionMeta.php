<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_meta',function(Blueprint $table){
          $table->integer('i_question_id')->index();
          $table->string('type');
          $table->string('question');
          $table->integer('answer_type_id')->index();
          $table->boolean('lecture');
          $table->boolean('lab');
          $table->boolean('tutorial');

          $table->foreign('answer_type_id')->references('answer_type_id')->on('answer_type');
          $table->primary('i_question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('question_meta');
    }
}
