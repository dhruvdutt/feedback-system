<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{
				DB::table('course')->insert([
						'course_id' => 'IT619',
						'course_name' => 'Design of Software System',
						'course_type'=> 'core',
						'course_lecture'=> '3.0',
						'course_lab' => '1.0',
						'course_tutorial' => '0.0',
				]);

				DB::table('course')->insert([
						'course_id' => 'IT618',
						'course_name' => 'Enterprise Computing',
						'course_type'=> 'core',
						'course_lecture'=> '3.0',
						'course_lab' => '2.0',
						'course_tutorial' => '0.0',
				]);

				DB::table('course')->insert([
						'course_id' => 'IT694',
						'course_name' => 'Computer Networks',
						'course_type'=> 'core',
						'course_lecture'=> '3.0',
						'course_lab' => '1.0',
						'course_tutorial' => '0.0',
				]);

				DB::table('course')->insert([
						'course_id' => 'IT616',
						'course_name' => 'Design and Analysis of Algorithm',
						'course_type'=> 'core',
						'course_lecture'=> '3.0',
						'course_lab' => '0.0',
						'course_tutorial' => '1.0',
				]);

				DB::table('course')->insert([
						'course_id' => 'IT617',
						'course_name' => 'Operating Systems',
						'course_type'=> 'core',
						'course_lecture'=> '3.0',
						'course_lab' => '1.0',
						'course_tutorial' => '0.0',
				]);

				DB::table('course')->insert([
						'course_id' => 'CC777',
						'course_name' => 'Cloud Computing',
						'course_type'=> 'elective',
						'course_lecture'=> '0.0',
						'course_lab' => '2.0',
						'course_tutorial' => '0.0',
				]);

		}
}
