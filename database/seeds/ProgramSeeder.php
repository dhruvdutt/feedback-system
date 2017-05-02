<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('program')->insert([
        'program_id' => '12',
        'program_name' => 'msc.it',
    ]);
      DB::table('program')->insert([
      'program_id' => '01',
      'program_name' => 'b.tech',
    ]);
    }
}
