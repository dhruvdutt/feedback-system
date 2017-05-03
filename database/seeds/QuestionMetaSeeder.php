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
						'question' => 'Was professor good in communication?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Did professor gave course overview?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was ppt helpful to understand the lecture?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Did professor provide any material/books to refer?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Did professor give any assignment/exercise regarding topic covered during class?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was ta helpful during lab?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was lab well planned?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was lab well equipped for the course?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was TA helpful in tutorial exercise solving?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Was tutorial exercise helpful in understanding the topic?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'Should course have project presentation?',
						'answer_type_id' => '1',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'Should course have two lab exams?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '1',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'custom',
						'question' => 'Should attendance be compulsory in tutorial?',
						'answer_type_id' => '1',
						'lecture' => '0',
						'lab' => '0',
						'tutorial' => '1',
						'isAvailable' => '1',
				]);

				DB::table('question_meta')->insert([
						'type' => 'fixed',
						'question' => 'Any suggestions for course?',
						'answer_type_id' => '2',
						'lecture' => '1',
						'lab' => '0',
						'tutorial' => '0',
						'isAvailable' => '1',
				]);

		}
}
