<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RadioOptionsMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radio_options_master', function(BluePrint $table) {
            $table->increments('option_id');
            $table->unsignedInteger('question_id')->nullable();
            $table->string('option');

            $table->foreign('question_id')->references('question_id')->on('question_master');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radio_options_master');
    }
}
