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
      DB::table('program_master')->insert([
          'program_id' => '12',
          'program_name' => 'Msc.IT',
      ]);
      DB::table('program_master')->insert([
          'program_id' => '14',
          'program_name' => 'B.Tech',
      ]);
      DB::table('program_master')->insert([
          'program_id' => '16',
          'program_name' => 'M.Tech',
      ]);
      DB::table('program_master')->insert([
          'program_id' => '8',
          'program_name' => 'Msc.IT(ARD)',
      ]);
    }
}
