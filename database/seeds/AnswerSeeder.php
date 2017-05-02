<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('answer_type')->insert([
        'answer_type_id' => '1',
        'answer_type' => 'radio',
    ]);


    DB::table('answer_type')->insert([
      'answer_type_id' => '2',
      'answer_type' => 'note',
  ]);
    }
}
