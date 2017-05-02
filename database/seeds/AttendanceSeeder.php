<?php

use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attendance')->insert([
        'student_feedback_id' => '1',
        'student_id' => '201612001',
        'feedback_id' => '1',
        'attendance' => 'true',
    ]);

    DB::table('attendance')->insert([
      'student_feedback_id' => '2',
      'student_id' => '201612002',
      'feedback_id' => '1',
      'attendance' => 'true',
  ]);

  DB::table('attendance')->insert([
    'student_feedback_id' => '3',
    'student_id' => '201612003',
    'feedback_id' => '1',
    'attendance' => 'true',
]);

DB::table('attendance')->insert([
  'student_feedback_id' => '4',
  'student_id' => '201612004',
  'feedback_id' => '1',
  'attendance' => 'false',
]);
DB::table('attendance')->insert([
  'student_feedback_id' => '5',
  'student_id' => '201612001',
  'feedback_id' => '2',
  'attendance' => 'true',
]);

DB::table('attendance')->insert([
  'student_feedback_id' => '6',
  'student_id' => '201612003',
  'feedback_id' => '2',
  'attendance' => 'false',
]);

    }
}
