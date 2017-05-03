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
						'type' => 'fixed',
						'question' => 'was professor good in communication?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',

				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'did professor gave course overview?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was ppt helpful to understand the lecture?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'did professor provide any material/books to refer?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',

				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'did professor give any assignment/exercise regarding topic covered during class?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',

				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was ta helpful during lab?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was lab well planned?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was lab well equipped for the course?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was ta helpful in tutorial exercise solving?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'was tutorial exercise helpful in understanding the topic?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
				]);
				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'should course have project presentation?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'should course have two lab exams ?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
				]);
				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'should attendance be compulsory in tutorial ?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
				]);
				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Any sugeestion for course?',
						'answer_type_id' => '2',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
				]);

		}
}
