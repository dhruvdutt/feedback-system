<?php

use Illuminate\Database\Seeder;

class FeedbackMetaDataSeeder extends Seeder
{
		/**
			* Run the database seeds.
			*
			* @return void
			*/
		public function run()
		{
				DB::table('feedback_meta_data')->insert([
						'feedback_name' => 'Feedback 1',
						'created_by' => 'admin',
						'start_flag' => '1',
						'active_flag' => '0',
						'start_date' => '2017-04-22',
						'end_date' => '2017-04-28',
				]);

				DB::table('feedback_meta_data')->insert([
						'feedback_name' => 'Feedback 2',
						'created_by' => 'admin',
						'start_flag' => '1',
						'active_flag' => '1',
						'start_date' => '2017-05-01',
						'end_date' => '2017-05-05',
				]);

				DB::table('feedback_meta_data')->insert([
						'feedback_name' => 'Feedback 3',
						'created_by' => 'admin',
						'start_flag' => '1',
						'active_flag' => '1',
						'start_date' => '2017-05-06',
						'end_date' => '2017-05-07',
				]);

		}
}
