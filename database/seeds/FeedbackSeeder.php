<?php

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('feedback')->insert([
          'program_course_term_serial_id' => '1',
          'program_course_term_id' => '1',
          'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
          'program_course_term_serial_id' => '2',
          'program_course_term_id' => '2',
          'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
          'program_course_term_serial_id' => '3',
          'program_course_term_id' => '3',
          'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
          'program_course_term_serial_id' => '4',
          'program_course_term_id' => '1',
          'serial_no' => '2',
      ]);
      DB::table('feedback')->insert([
          'program_course_term_serial_id' => '5',
          'program_course_term_id' => '2',
          'serial_no' => '2',
      ]);
    }
}
