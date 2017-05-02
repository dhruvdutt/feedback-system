<?php

use Illuminate\Database\Seeder;

class FeedbackProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('feedback_program')->insert([
        'feedback_id' => '1',
        'program_id' => '12',
        'start_date' => '2017-4-22',
        'end_date' => '2017-4-28',
    ]);

    DB::table('feedback_program')->insert([
      'feedback_id' => '1',
      'program_id' => '01',
      'start_date' => '2017-4-23',
      'end_date' => '2017-4-27',
  ]);
  DB::table('feedback_program')->insert([
    'feedback_id' => '2',
    'program_id' => '12',
    'start_date' => '2017-5-1',
    'end_date' => '2017-5-5',
]);
    }
}
