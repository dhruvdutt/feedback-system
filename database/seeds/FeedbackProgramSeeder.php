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
        'feedback_program_id' => '1',
        'feedback_id' => '1',
        'program_id' => '12',
        'start_date' => '22/4/2017',
        'end_date' => '28/4/2017',
    ]);

    DB::table('feedback_program')->insert([
      'feedback_program_id' => '2',
      'feedback_id' => '1',
      'program_id' => '01',
      'start_date' => '23/4/2017',
      'end_date' => '26/4/2017',
  ]);
  DB::table('feedback_program')->insert([
    'feedback_program_id' => '3',
    'feedback_id' => '2',
    'program_id' => '12',
    'start_date' => '1/5/2017',
    'end_date' => '5/5/2017',
]);
    }
}
