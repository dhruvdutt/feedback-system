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
						'i_question_id' => '11',
						'course_id' => 'IT619'
				]);

				DB::table('question_link')->insert([
						'i_question_id' => '12',
						'course_id' => 'IT617'
				]);

				DB::table('question_link')->insert([
						'i_question_id' => '13',
						'course_id' => 'IT616'
				]);

				DB::table('question_link')->insert([
						'i_question_id' => '13',
						'course_id' => 'IT616'
				]);

		}
}
