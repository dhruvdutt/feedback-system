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
        'option' => 'yes',
    ]);
    DB::table('option')->insert([
      'option' => 'maybe',
  ]);
  DB::table('option')->insert([
    'option' => 'no',
]);
DB::table('option')->insert([
  'i_question_id' => '3',
  'option' => 'strongly agree',
]);
DB::table('option')->insert([
  'i_question_id' => '3',
  'option' => 'agree',
]);
DB::table('option')->insert([
  'i_question_id' => '3',
  'option' => 'nutral',
]);
DB::table('option')->insert([
  'i_question_id' => '3',
  'option' => 'disagree',
]);
DB::table('option')->insert([
  'i_question_id' => '3',
  'option' => 'strongly disagree',
]);
DB::table('option')->insert([
  'i_question_id' => '4',
  'option' => 'yes',
]);
DB::table('option')->insert([
  'i_question_id' => '4',
  'option' => 'no',
]);

    }
}
