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
						'program_course_term_id' => '1',
						'feedback_id' => '1',
						'serial_no' => '1',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '2',
						'feedback_id' => '1',
						'serial_no' => '1',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '3',
						'feedback_id' => '1',
						'serial_no' => '1',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '4',
						'feedback_id' => '1',
						'serial_no' => '1',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '5',
						'feedback_id' => '1',
						'serial_no' => '1',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '1',
						'feedback_id' => '1',
						'serial_no' => '2',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '2',
						'feedback_id' => '1',
						'serial_no' => '2',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '3',
						'feedback_id' => '1',
						'serial_no' => '2',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '4',
						'feedback_id' => '1',
						'serial_no' => '2',
				]);
				DB::table('feedback')->insert([
						'program_course_term_id' => '5',
						'feedback_id' => '1',
						'serial_no' => '2',
				]);

		}
}
