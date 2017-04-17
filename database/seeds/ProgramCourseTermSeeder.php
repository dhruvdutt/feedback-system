<?php

use Illuminate\Database\Seeder;

class ProgramCourseTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('program_term_course_master')->insert([
          'program_term_course_id' => '1',
          'program_id' => '1',
          'course_id' => 'IT617',
          'term_id' => '2',
      ]);
      DB::table('program_term_course_master')->insert([
          'program_term_course_id' => '2',
          'program_id' => '1',
          'course_id' => 'IT619',
          'term_id' => '2',
      ]);
      DB::table('program_term_course_master')->insert([
          'program_term_course_id' => '1',
          'program_id' => '2',
          'course_id' => 'IT612',
          'term_id' => '3',
      ]);
    }
}
