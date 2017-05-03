<?php

use Illuminate\Database\Seeder;

class ProgramCourseTermSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{
				DB::table('program_course_term')->insert([
						'program_id' => '12',
						'course_id' => 'it619',
						'term_id' => '54',
				]);

				DB::table('program_course_term')->insert([
						'program_id' => '12',
						'course_id' => 'it617',
						'term_id' => '54',
				]);

				DB::table('program_course_term')->insert([
						'program_id' => '12',
						'course_id' => 'it616',
						'term_id' => '54',
				]);

				DB::table('program_course_term')->insert([
						'program_id' => '12',
						'course_id' => 'it618',
						'term_id' => '54',
				]);

				DB::table('program_course_term')->insert([
						'program_id' => '12',
						'course_id' => 'it694',
						'term_id' => '54',
				]);

		}
}
