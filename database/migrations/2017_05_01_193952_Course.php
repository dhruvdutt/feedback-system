<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Course extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('course',function(Blueprint $table){
        $table->engine = 'InnoDB';

        $table->string('course_id')->index();
        $table->string('course_name');
        $table->string('course_type');
        $table->decimal('course_lecture',5,2);
        $table->decimal('course_lab',5,2);
        $table->decimal('course_tutorial',5,2);

        $table->primary('course_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
