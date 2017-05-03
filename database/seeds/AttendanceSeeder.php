<?php

use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{
				DB::table('attendance')->insert([
						'student_id' => '201612001',
						'feedback_id' => '1',
						'attendance' => '1',
				]);

				DB::table('attendance')->insert([
						'student_id' => '201612002',
						'feedback_id' => '1',
						'attendance' => '1',
				]);

				DB::table('attendance')->insert([
						'student_id' => '201612003',
						'feedback_id' => '1',
						'attendance' => '1',
				]);

				DB::table('attendance')->insert([
						'student_id' => '201612001',
						'feedback_id' => '2',
						'attendance' => '1',
				]);

		}
}
