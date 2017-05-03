<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{

				DB::table('option')->insert([
						'option' => 'Yes',
				]);

				DB::table('option')->insert([
						'option' => 'Maybe',
				]);

				DB::table('option')->insert([
						'option' => 'No',
				]);

				DB::table('option')->insert([
						'i_question_id' => '3',
						'option' => 'Strongly Agree',
				]);

				DB::table('option')->insert([
						'i_question_id' => '3',
						'option' => 'Agree',
				]);

				DB::table('option')->insert([
						'i_question_id' => '3',
						'option' => 'Neutral',
				]);

				DB::table('option')->insert([
						'i_question_id' => '3',
						'option' => 'Disagree',
				]);

				DB::table('option')->insert([
						'i_question_id' => '3',
						'option' => 'Strongly Disagree',
				]);

		}
}
