<?php

use Illuminate\Database\Seeder;

class RadioOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('radio_options_master')->insert([
//          'option_id' => '1',
          // 'question_id' => '',
          'option' => 'Yes',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '2',
          // 'question_id' => '',
          'option' => 'Maybe',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '3',
          // 'question_id' => '',
          'option' => 'No',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '4',
          // 'question_id' => '',
          'option' => 'Remove',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '5',
          'question_id' => '3',
          'option' => 'Not Necessarily',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '4',
          'question_id' => '3',
          'option' => 'Not Necessarily',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '5',
          'question_id' => '4',
          'option' => 'Custom Option 1 A',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '6',
          'question_id' => '4',
          'option' => 'Custom Option 1 B',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '7',
          'question_id' => '4',
          'option' => 'Custom Option 1 C',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '8',
          'question_id' => '5',
          'option' => 'Custom Option 2 A',
      ]);
      DB::table('radio_options_master')->insert([
//          'option_id' => '9',
          'question_id' => '5',
          'option' => 'Custom Option 2 B',
      ]);
    }
}
