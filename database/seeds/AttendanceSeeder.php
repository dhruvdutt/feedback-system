<?php

use Illuminate\Database\Seeder;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attendence')->insert([
          'student_term_id' => '1',
          'term_id' => '2',
          'student_id' => '201612085',
          'program_id' => '12',
          'attendence' => true,
      ]);
      DB::table('attendence')->insert([
          'student_term_id' => '2',
          'term_id' => '2',
          'student_id' => '201612095',
          'program_id' => '12',
          'attendence' => true,
      ]);
      DB::table('attendence')->insert([
          'student_term_id' => '3',
          'term_id' => '2',
          'student_id' => '201612035',
          'program_id' => '12',
          'attendence' => true,
      ]);
      DB::table('attendence')->insert([
          'student_term_id' => '4',
          'term_id' => '2',
          'student_id' => '201612065',
          'program_id' => '12',
          'attendence' => true,
      ]);
      DB::table('attendence')->insert([
          'student_term_id' => '5',
          'term_id' => '2',
          'student_id' => '201612087',
          'program_id' => '12',
          'attendence' => true,
      ]);
      DB::table('attendence')->insert([
          'student_term_id' => '6',
          'term_id' => '2',
          'student_id' => '201612001',
          'program_id' => '12',
          'attendence' => true,
      ]);
    }
}
