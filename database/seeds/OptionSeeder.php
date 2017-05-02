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
        'option_id' => '1',

        'option' => 'yes',
    ]);
    DB::table('option')->insert([
      'option_id' => '2',

      'option' => 'maybe',
  ]);
  DB::table('option')->insert([
    'option_id' => '3',

    'option' => 'no',
]);
DB::table('option')->insert([
  'option_id' => '4',
  'i_question_id' => '3',
  'option' => 'strongly agree',
]);
DB::table('option')->insert([
  'option_id' => '5',
  'i_question_id' => '3',
  'option' => 'agree',
]);
DB::table('option')->insert([
  'option_id' => '6',
  'i_question_id' => '3',
  'option' => 'nutral',
]);
DB::table('option')->insert([
  'option_id' => '7',
  'i_question_id' => '3',
  'option' => 'disagree',
]);
DB::table('option')->insert([
  'option_id' => '8',
  'i_question_id' => '3',
  'option' => 'strongly disagree',
]);
DB::table('option')->insert([
  'option_id' => '9',
  'i_question_id' => '4',
  'option' => 'yes',
]);
DB::table('option')->insert([
  'option_id' => '10',
  'i_question_id' => '4',
  'option' => 'no',
]);

    }
}
