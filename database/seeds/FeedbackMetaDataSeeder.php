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
      DB::table('feedback_metadata')->insert([
          'term_id' => '1',
          'username' => 'dineshprajapati',
          'start_date' => '2014/04/12',
          'end_date' => '2014/04/22',
      ]);
      DB::table('feedback_metadata')->insert([
          'term_id' => '2',
          'username' => 'dineshprajapati',
          'start_date' => '2014/08/15',
          'end_date' => '2014/08/23',
      ]);
      DB::table('feedback_metadata')->insert([
          'term_id' => '3',
          'username' => 'dineshprajapati',
          'start_date' => '2014/12/13',
          'end_date' => '2014/12/25',
      ]);
      DB::table('feedback_metadata')->insert([
          'term_id' => '4',
          'username' => 'dineshprajapati',
          'start_date' => '2015/03/12',
          'end_date' => '2015/03/22',
      ]);
    }
}
