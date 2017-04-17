<?php

use Illuminate\Database\Seeder;

class TermYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('term_year_master')->insert([
          'term_id' => '1',
          'term_name' => 'Autumn',
          'year_name'=>'2014',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '2',
          'term_name' => 'Summer',
          'year_name'=>'2014',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '3',
          'term_name' => 'Winter',
          'year_name'=>'2014',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '4',
          'term_name' => 'Autumn',
          'year_name'=>'2015',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '5',
          'term_name' => 'Summer',
          'year_name'=>'2015',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '6',
          'term_name' => 'Winter',
          'year_name'=>'2015',
      ]);DB::table('term_year_master')->insert([
          'term_id' => '7',
          'term_name' => 'Autumn',
          'year_name'=>'2016',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '8',
          'term_name' => 'Summer',
          'year_name'=>'2016',
      ]);
      DB::table('term_year_master')->insert([
          'term_id' => '9',
          'term_name' => 'Winter',
          'year_name'=>'2016',
      ]);
    }
}
