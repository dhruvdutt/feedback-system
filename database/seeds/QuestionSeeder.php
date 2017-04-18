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
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      // Custom Questions
      DB::table('question_master')->insert([
          'question_id' => '3',
          'course_id' => 'IT619',
          'term_id' => '1',
          'question' => 'How Was The Project?',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      DB::table('question_master')->insert([
          'question_id' => '4',
          'course_id' => 'IT612',
          'term_id' => '3',
          'question' => 'Custom Question 1',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      DB::table('question_master')->insert([
          'question_id' => '5',
          'course_id' => 'IT617',
          'term_id' => '3',
          'question' => 'Custom Question 2',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
      DB::table('question_master')->insert([
          'question_id' => '6',
          'course_id' => 'IT616',
          'term_id' => '3',
          'question' => 'Custom Question 3',
          'answer_type_id' => '1',
          'lecture' => true,
          'lab' => true,
          'tutorial' => false
      ]);
    }
}
