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
      DB::table('term_year')->insert([
        'term_id' => '54',
        'term_name' => 'Summer',
        'year_name' => '2016-17',
    ]);
      DB::table('term_year')->insert([
      'term_id' => '55',
      'term_name' => 'Winter',
      'year_name' => '2016-17',
    ]);
      DB::table('term_year')->insert([
        'term_id' => '56',
        'term_name' => 'Autumn',
        'year_name' => '2016-17',
    ]);
    }
}
