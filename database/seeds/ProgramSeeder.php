<?php

use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('programme_master')->insert([
          'programme_id' => '12',
          'programme_name' => 'Msc.IT',
      ]);
      DB::table('programme_master')->insert([
          'programme_id' => '14',
          'programme_name' => 'B.Tech',
      ]);
      DB::table('programme_master')->insert([
          'programme_id' => '16',
          'programme_name' => 'M.Tech',
      ]);
      DB::table('programme_master')->insert([
          'programme_id' => '8',
          'programme_name' => 'Msc.IT(ARD)',
      ]);
    }
}
