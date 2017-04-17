<?php

use Illuminate\Database\Seeder;

class StudentFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('student_feedback_master')->insert([
          'program_course_term_serial_question_id' => '1',
          'program_course_term_serial_id' => '1',
          'question_id' => '1',
          'answer_option_id' => '3',
          'note' => '',
      ]);
      DB::table('student_feedback_master')->insert([
          'program_course_term_serial_question_id' => '2',
          'program_course_term_serial_id' => '2',
          'question_id' => '2',
          'answer_option_id' => '2',
          'note' => '',
      ]);
    }
}
