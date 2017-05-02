<?php

use Illuminate\Database\Seeder;

class QuestionLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('question_link')->insert([
        'i_question_id' => '1',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '2',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '3',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '4',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '5',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '6',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '7',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '8',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '9',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '10',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '11',
        'course_id' => 'it619',
        'feedback_id' => '1',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '12',
        'course_id' => 'it617',
        'feedback_id' => '1',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '13',
        'course_id' => 'it616',
        'feedback_id' => '1',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '13',
        'course_id' => 'it616',
        'feedback_id' => '2',
      ]);
      DB::table('question_link')->insert([
        'i_question_id' => '14',
      ]);
    }
}
