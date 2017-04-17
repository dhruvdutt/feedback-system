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
      DB::table('course_master')->insert([
          'course_id' => 'IT619',
          'course_name' => 'Algorithms',
          'course_type' => 'Core',
          'lecture_grade' => '4',
          'lab_grade' => '0',
          'tutorial_grade' => '4',
      ]);
      DB::table('course_master')->insert([
          'course_id' => 'IT617',
          'course_name' => 'Operating Systems',
          'course_type' => 'Core',
          'lecture_grade' => '4',
          'lab_grade' => '4',
          'tutorial_grade' => '0',
      ]);
      DB::table('course_master')->insert([
          'course_id' => 'IT612',
          'course_name' => 'Design Of Software Systems',
          'course_type' => 'Core',
          'lecture_grade' => '6',
          'lab_grade' => '4',
          'tutorial_grade' => '0',
      ]);
      DB::table('course_master')->insert([
          'course_id' => 'IT618',
          'course_name' => 'Computer Networks',
          'course_type' => 'Core',
          'lecture_grade' => '4',
          'lab_grade' => '4',
          'tutorial_grade' => '0',
      ]);
    }
}
