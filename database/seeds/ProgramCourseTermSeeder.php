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
      DB::table('program_course_term')->insert([
          'program_course_term_id' => '1',
          'program_id' => '12',
          'course_id' => 'IT617',
          'term_id' => '2',
      ]);
      DB::table('program_course_term')->insert([
          'program_course_term_id' => '2',
          'program_id' => '12',
          'course_id' => 'IT619',
          'term_id' => '2',
      ]);
      DB::table('program_course_term')->insert([
          'program_course_term_id' => '3',
          'program_id' => '14',
          'course_id' => 'IT612',
          'term_id' => '3',
      ]);
    }
}
