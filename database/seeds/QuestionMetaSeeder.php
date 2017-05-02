<?php

use Illuminate\Database\Seeder;

class QuestionMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('question_meta')->insert([
        'i_question_id' => '1',
        'type' => 'fixed',
        'question' => 'was professor good in communication?',
        'answer_type_id' => '1',
        'lecture' => true,
        'lab' => false,
        'tutorial' => false,

    ]);
      DB::table('question_meta')->insert([
      'i_question_id' => '2',
      'type' => 'fixed',
      'question' => 'did professor gave course overview?',
      'answer_type_id' => '1',
      'lecture' => true,
      'lab' => false,
      'tutorial' => false,
  ]);
  DB::table('question_meta')->insert([
    'i_question_id' => '3',
    'type' => 'fixed',
    'question' => 'was ppt helpful to understand the lecture?',
    'answer_type_id' => '1',
    'lecture' => true,
    'lab' => false,
    'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '4',
  'type' => 'fixed',
  'question' => 'did professor provide any material/books to refer?',
  'answer_type_id' => '1',
  'lecture' => true,
  'lab' => false,
  'tutorial' => false,

]);
DB::table('question_meta')->insert([
  'i_question_id' => '5',
  'type' => 'fixed',
  'question' => 'did professor give any assignment/exercise regarding topic covered during class?',
  'answer_type_id' => '1',
    'lecture' => true,
  'lab' => false,
  'tutorial' => false,

]);
DB::table('question_meta')->insert([
  'i_question_id' => '6',
  'type' => 'fixed',
  'question' => 'was ta helpful during lab?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => true,
  'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '7',
  'type' => 'fixed',
  'question' => 'was lab well planned?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => true,
  'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '8',
  'type' => 'fixed',
  'question' => 'was lab well equipped for the course?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => true,
  'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '9',
  'type' => 'fixed',
  'question' => 'was ta helpful in tutorial exercise solving?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => false,
  'tutorial' => true,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '10',
  'type' => 'fixed',
  'question' => 'was tutorial exercise helpful in understanding the topic?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => false,
  'tutorial' => true,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '11',
  'type' => 'custom',
  'question' => 'should course have project presentation?',
  'answer_type_id' => '1',
  'lecture' => true,
  'lab' => false,
  'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '12',
  'type' => 'custom',
  'question' => 'should course have two lab exams ?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => true,
  'tutorial' => false,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '13',
  'type' => 'custom',
  'question' => 'should attendance be compulsory in tutorial ?',
  'answer_type_id' => '1',
  'lecture' => false,
  'lab' => false,
  'tutorial' => true,
]);
DB::table('question_meta')->insert([
  'i_question_id' => '14',
  'type' => 'fixed',
  'question' => 'Any sugeestion for course?',
  'answer_type_id' => '2',
  'lecture' => true,
  'lab' => false,
  'tutorial' => false,
]);

    }
}
