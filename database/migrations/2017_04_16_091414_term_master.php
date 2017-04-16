<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TermMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_master',function(Blueprint $table){
          $table->integer('term_id')->index();
          $table->integer('year_id')->index();
          $table->string('term_name');
          $table->string('year_name');
          $table->primary('term_id');
          $table->primary('year_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_master');
    }
}
