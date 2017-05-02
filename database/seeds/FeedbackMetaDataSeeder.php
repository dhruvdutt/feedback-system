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
        'created_by' => 'admin123',
        'start_flag' => true,
        'active_flag' => false,
        'start_date' => '2017-4-22',
        'end_date' => '2017-4-28',
    ]);

      DB::table('feedback_meta_data')->insert([
        'feedback_name' => 'Feedback 2',
        'created_by' => 'admin123',
        'start_flag' => true,
        'active_flag' => true,
        'start_date' => '2017-5-1',
        'end_date' => '2017-5-5',
    ]);

    DB::table('feedback_meta_data')->insert([
      'feedback_name' => 'Feedback 3',
      'created_by' => 'admin123',
      'start_flag' => true,
      'active_flag' => true,
      'start_date' => '2017-5-6',
      'end_date' => '2017-5-7',
  ]);


    }
}
