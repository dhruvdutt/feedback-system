<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('question_master')->insert([
          'question_id' => '1',
          // 'course_id' => '',
          // 'term_id' => '',
          'question' => 'Do You Like This Subject?',
          'question_type' => 'Fixed',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      DB::table('question_master')->insert([
          'question_id' => '2',
          // 'course_id' => '',
          // 'term_id' => '',
          'question' => 'Do You Like The Teaching Of The Instructor?',
          'question_type' => 'Fixed',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      DB::table('question_master')->insert([
          'question_id' => '3',
          'course_id' => 'IT619',
          'term_id' => '1',
          'question' => 'How Was The Project?',
		        'question_type' => 'Custom',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
    }
}
