<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('course')->insert([
        'course_id' => 'it619',
        'course_name' => 'design of software system',
        'course_type'=> 'core',
        'course_lecture'=> '3.0',
        'course_lab' => '1.0',
        'course_tutorial' => '0.0',
    ]);

      DB::table('course')->insert([
        'course_id' => 'it618',
        'course_name' => 'enterprise computing',
        'course_type'=> 'core',
        'course_lecture'=> '3.0',
        'course_lab' => '2.0',
        'course_tutorial' => '0.0',
    ]);

     DB::table('course')->insert([
      'course_id' => 'it694',
      'course_name' => 'computer network',
      'course_type'=> 'core',
      'course_lecture'=> '3.0',
      'course_lab' => '1.0',
      'course_tutorial' => '0.0',
    ]);

     DB::table('course')->insert([
      'course_id' => 'it616',
      'course_name' => 'analysis and design of algorithm',
      'course_type'=> 'core',
      'course_lecture'=> '3.0',
      'course_lab' => '0.0',
      'course_tutorial' => '1.0',
    ]);

     DB::table('course')->insert([
      'course_id' => 'it617',
      'course_name' => 'operating system',
      'course_type'=> 'core',
      'course_lecture'=> '3.0',
      'course_lab' => '1.0',
      'course_tutorial' => '0.0',
   ]);

    DB::table('course')->insert([
      'course_id' => 'hm002',
      'course_name' => 'north indian classical music 2',
      'course_type'=> 'elective',
      'course_lecture'=> '0.0',
      'course_lab' => '2.0',
      'course_tutorial' => '0.0',
    ]);

    }
}
