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
        'pct_feedback_serial_id' => '1',
        'program_course_term_id' => '1',
        'feedback_id' => '1',
        'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '2',
        'program_course_term_id' => '2',
        'feedback_id' => '1',
        'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '3',
        'program_course_term_id' => '3',
        'feedback_id' => '1',
        'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '4',
        'program_course_term_id' => '4',
        'feedback_id' => '1',
        'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '5',
        'program_course_term_id' => '5',
        'feedback_id' => '1',
        'serial_no' => '1',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '6',
        'program_course_term_id' => '1',
        'feedback_id' => '1',
        'serial_no' => '2',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '7',
        'program_course_term_id' => '2',
        'feedback_id' => '1',
        'serial_no' => '2',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '8',
        'program_course_term_id' => '3',
        'feedback_id' => '1',
        'serial_no' => '2',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '9',
        'program_course_term_id' => '4',
        'feedback_id' => '1',
        'serial_no' => '2',
      ]);
      DB::table('feedback')->insert([
        'pct_feedback_serial_id' => '10',
        'program_course_term_id' => '5',
        'feedback_id' => '1',
        'serial_no' => '2',
      ]);

    }
}
