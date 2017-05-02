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
        'feedback_id' => '1',
        'feedback_name' => '',
        'created_by' => 'admin123',
        'start_flag' => 'true',
        'active_flag' => 'flase',
        'start_date' => '22/4/2017',
        'end_date' => '28/4/2017',
    ]);

      DB::table('feedback_meta_data')->insert([
        'feedback_id' => '2',
        'feedback_name' => '',
        'created_by' => 'admin123',
        'start_flag' => 'true',
        'active_flag' => 'true',
        'start_date' => '1/5/2017',
        'end_date' => '5/5/2017',
    ]);

    DB::table('feedback_meta_data')->insert([
      'feedback_id' => '3',
      'feedback_name' => '',
      'created_by' => 'admin123',
      'start_flag' => 'true',
      'active_flag' => 'true',
      'start_date' => '6/5/2017',
      'end_date' => '7/5/2017',
  ]);


    }
}
