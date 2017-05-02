<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Option extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('option',function(Blueprint $table){
        $table->integer('option_id')->index();
        $table->integer('i_question_id')->nullable()->index();
        $table->string('option');

        $table->foreign('i_question_id')->references('i_question_id')->on('question_meta');
        $table->primary('option_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('option');
    }
}
